<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Plagiarism - Plagiarism Check</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
    <link rel="stylesheet" href="./style.css">

</head>
<style>
    pre {
        white-space: pre;
    }

    textarea {
        height: 240px !important;
    }

    p {
        font-weight: bold;
    }

    .btn-orange-success {
        color: #fff;
        background-color: #ff9333;
    }

    .clear_text_btn {
        position: absolute;
        font-size: 0;
        top: 13px;
        right: 13px;
        width: 13px;
        height: 13px;
        background-image: url(./assets/close.svg);
    }

    .ps-relative {
        position: relative;
    }

    li.two:before {
        content: "\f00c";
    }

    .section_plag-checker {
        padding: 50px 0;
        background-color: rgba(27, 153, 229, .1);
        margin-top: 7%;
    }

    .plag-checker-info-v2__title {
        margin-bottom: 20px;
        font-family: Overlock, sans-serif;
        font-size: 26px;
        line-height: 1.3;
        color: #00466f;
    }

    .plag-checker-info-v2__list-item,
    .plag-checker-info-v2__text {
        font-size: 16px;
        line-height: 1.7;
        color: #00466f;
        font-family: Catamaran, sans-serif;
        font-weight: 400;
    }

    .ml-5 {
        margin-left: 5rem;
    }

    .mr-5 {
        margin-right: 5rem;
    }

    .d_flex_center {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 15px;
    }

    #submit-quiery {
        font-size: 18px;
        text-transform: uppercase;
    }
</style>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <section class="section_plag-checker">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
                    <div class="ml-5">
                        <h2 class="plag-checker-info-v2__title">Free Online Plagiarism Checker</h2>
                        <hr>
                        <p class="plag-checker-info-v2__text">
                            Get a 100% accurate report from an advanced
                            AI-powered writing assistant. Our plagiarism checker works with all common file formats.
                        </p>
                        <ul class="plag-checker-info-v2__list-item">
                            <li class="one">
                                Deep Search
                            </li>
                            <li class="one">
                                Check in real time
                            </li>
                            <li class="one">
                                Data Safety
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                    <div class="mr-5">
                        <label for="">Attach File (doc, docx)</label>
                        <input type="file" name="" id="fileupload" onchange="fileUpload()">
                        <h3 class="plag-checker-info-v2__title">Paste Your Text Here</h3>
                        <hr>

                        <span class="text-danger"><strong id="error"></strong></span>
                        <form action="<?= base_url('downloadPDF') ?>" method="post">
                            <div class="form-group ps-relative">
                                <textarea class="form-control" id="plagrism-textarea" name="text" placeholder="Paste Your Text Here"></textarea>
                                <div id="word-count">Words: 0</div>
                                <div id="char-count">Characters: 0</div>
                                <a href="javascript:void(0)" class="js_clear_form_button clear_text_btn">Clear Text</a>
                            </div>

                            <div class="form-group text-center d_flex_center">
                                <button type="submit" id="submit-quiery" class="btn btn-orange-success" onclick="return validation()">Check for Plagiarism</button>
                                 
                                
                            </div>
                        </form>
                        <div class="response" style="display:none">
                            <p>Your Response will goes here....</p>
                            <img src="<?= asset_url() ?>images/book.gif" alt="">
                        </div>
                        <div id="show-data">

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- partial -->
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
    <script src="./script.js"></script>
    <script>
        $('.js_clear_form_button').on('click', function() {
            $("#plagrism-textarea").val('');
            $('.response').css('display', 'none');

        })

        const textarea = document.getElementById('plagrism-textarea');
        const wordCount = document.getElementById('word-count');
        const charCount = document.getElementById('char-count');

        textarea.addEventListener('input', () => {
            console.log('text area')
            const words = textarea.value.split(/\s+/).filter(Boolean);
            const characters = textarea.value.length;

            wordCount.innerHTML = `Words: ${words.length}`;
            charCount.innerHTML = `Characters: ${characters}`;
        });
        $('#submit-quiery-2').on('click', function() {
            let content = $("#plagrism-textarea").val();
            let words = textarea.value.split(/\s+/).filter(Boolean);
            if (words.length < 15) {
                $('#error').text('Please enter at least 15 words.');
                return false;
            } else {
                $('#error').text('');

            }
            $.ajax({
                method: 'POST',
                url: '<?= base_url('palagarism') ?>',
                data: ({
                    text: content
                }),
                dataType: 'text',
                beforeSend: function() {
                    $('.response').css('display', 'block');
                    $('#show-data').html('');
                },
                complete: function() {
                    $('.response').css('display', 'none');
                },
                success: function(data) {

                    $('#show-data').html('<p>' + data + '</p>')
                }

            });


        })

        function validation(){
            let words = textarea.value.split(/\s+/).filter(Boolean);
            if (words.length < 15) {
                $('#error').text('Please enter at least 15 words.');
                return false;
            } else {
                $('#error').text('');

            }

            if (words.length > 1000) {
                $('#error').text('Please enter at words no more than 1000 words');
                return false;
            } else {
                $('#error').text('');

            }
        }

        function fileUpload() {
            let formData = new FormData();
            let fileupload = $('#fileupload');
            formData.append("file", fileupload.prop('files')[0]);
            $.ajax({
                method: 'POST',
                url: '<?= base_url('palagarismFile') ?>',
                data: formData,

                dataType: 'text',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('.response').css('display', 'block');
                    $('#show-data').html('');
                },
                complete: function() {
                    $('.response').css('display', 'none');
                },
                success: function(data) {
                    textarea.value = data;
                    let words = data.split(/\s+/).filter(Boolean);
                    let characters = data.length;
                    wordCount.innerHTML = `Words: ${words.length}`;
                    charCount.innerHTML = `Characters: ${characters}`;

                }

            });
        }
    </script>

</body>

</html>