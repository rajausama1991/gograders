<?php

function resize_crop_image_new($nw,$nh,$source_path,$source_image_name,$dest_name,$name_ext,$rw=100,$rh=100,$crop=true)

	{
		$CI = &get_instance();
		 
		  //echo($source_image_path.'<br>'.$new_image_name.'<br>'.$source_image_name);
		  /* $hd = fopen('test.txt','w');
							fwrite($hd,$source_image_path.'thumbs/'.$new_image_name.$source_image_name);
							fclose($hd);*/
	   	$size = getimagesize($source_path.$source_image_name);
		$w = $size[0];
		$h = $size[1];
        if($h>$w)
		{
			$fixed_dim = 'width';
		}
		else if($h<$w)
		{
			$fixed_dim = 'height';
		}
		else
		{
			$fixed_dim = 'auto';
		}
				
	
				   
		$config['image_library'] = 'GD2';
		$config['source_image'] = $source_path.$source_image_name;
		$config['create_thumb'] = false;
		$config['maintain_ratio'] = true;
		
		$config['master_dim']=$fixed_dim;
	
		$config['quality'] = '100%';
		$config['new_image'] = $source_path.$dest_name.$source_image_name;	
		$config['width'] = $rw;
		$config['height'] = $rh;
		$CI->load->library('image_lib', $config);
		$CI->image_lib->initialize($config);
		if ( ! $CI->image_lib->resize())
		{
			echo $CI->image_lib->display_errors();
		  
			
		}
		if($crop==true)
		{
		 	$size = getimagesize($source_path.$dest_name.$source_image_name);
			$w = $size[0];
			$h = $size[1];
			switch($name_ext) {
				case 'gif':
				$simg = imagecreatefromgif($source_path.$dest_name.$source_image_name);
				break;
				case 'jpg':
				$simg = imagecreatefromjpeg($source_path.$dest_name.$source_image_name);
				break;
				case 'JPG':
				$simg = imagecreatefromjpeg($source_path.$dest_name.$source_image_name);
				break;
				
				case 'png':
				$simg = imagecreatefrompng($source_path.$dest_name.$source_image_name);
				break;
				
				case 'jpeg':
				$simg = imagecreatefromjpeg($source_path.$dest_name.$source_image_name);
				break;
			}
			
			$dimg = imagecreatetruecolor($nw, $nh);
			$wm = $w/$nw;
			$hm = $h/$nh;
			$h_height = $nh/2;
			$w_height = $nw/2;
			imagecopyresampled($dimg,$simg,0,0,0,0,$nw,$nh,$w,$h);
			
		/*	if($w> $h) {
				$adjusted_width = $w / $hm;
				$half_width = $adjusted_width / 2;
				$int_width = $half_width - $w_height;
				imagecopyresampled($dimg,$simg,-$int_width,0,0,0,$adjusted_width,$nh,$w,$h);
			} elseif(($w <$h) || ($w == $h)) {
				$adjusted_height = $h / $wm;
				$half_height = $adjusted_height / 2;
				$int_height = $half_height - $h_height;
				imagecopyresampled($dimg,$simg,0,-$int_height,0,0,$nw,$adjusted_height,$w,$h);
			} else {*/
				//imagecopyresampled($dimg,$simg,0,0,0,0,$nw,$nh,$w,$h);
			/*}*/
			imagejpeg($dimg,$source_path.$dest_name.$source_image_name,100);
		}
	}





function resize_crop_image($nw,$nh,$source_path,$source_image_name,$dest_name,$name_ext,$crop=true)

{
		$CI = &get_instance(); 
		  //echo($source_image_path.'<br>'.$new_image_name.'<br>'.$source_image_name);
		  /* $hd = fopen('test.txt','w');
							fwrite($hd,$source_image_path.'thumbs/'.$new_image_name.$source_image_name);
							fclose($hd);*/
		   		   
	   	$size = getimagesize($source_path.$source_image_name);
		$w = $size[0];
		$h = $size[1];
        if($h>$w)
		{
			$fixed_dim = 'width';
		}
		else if($h<$w)
		{
			$fixed_dim = 'height';
		}
		else
		{
			$fixed_dim = 'auto';
		}
				
	
				   
		$config['image_library'] = 'GD2';
		$config['source_image'] = $source_path.$source_image_name;
		$config['create_thumb'] = false;
		$config['maintain_ratio'] = TRUE;
		
		$config['master_dim']=$fixed_dim;
	
		$config['quality'] = '100%';
		$config['new_image'] = $source_path.$dest_name.$source_image_name;	
		$config['width'] = $nw;
		$config['height'] = $nh;
		$CI->load->library('image_lib', $config);
		$CI->image_lib->initialize($config);
		if ( ! $CI->image_lib->resize())
		{
			echo $CI->image_lib->display_errors();
		  
			
		}

		if($crop==true)
		{
		 	$size = getimagesize($source_path.$dest_name.$source_image_name);
			$w = $size[0];
			$h = $size[1];
			switch($name_ext) {
				case 'gif':
				$simg = imagecreatefromgif($source_path.$dest_name.$source_image_name);
				break;
				case 'jpg':
				$simg = imagecreatefromjpeg($source_path.$dest_name.$source_image_name);
				break;
				case 'JPG':
				$simg = imagecreatefromjpeg($source_path.$dest_name.$source_image_name);
				break;
				
				case 'png':
				$simg = imagecreatefrompng($source_path.$dest_name.$source_image_name);
				break;
				
				case 'jpeg':
				$simg = imagecreatefromjpeg($source_path.$dest_name.$source_image_name);
				break;
			}
			
			$dimg = imagecreatetruecolor($nw, $nh);
			$wm = $w/$nw;
			$hm = $h/$nh;
			$h_height = $nh/2;
			$w_height = $nw/2;
			imagecopyresampled($dimg,$simg,0,0,0,0,$nw,$nh,$w,$h);
			
		/*	if($w> $h) {
				$adjusted_width = $w / $hm;
				$half_width = $adjusted_width / 2;
				$int_width = $half_width - $w_height;
				imagecopyresampled($dimg,$simg,-$int_width,0,0,0,$adjusted_width,$nh,$w,$h);
			} elseif(($w <$h) || ($w == $h)) {
				$adjusted_height = $h / $wm;
				$half_height = $adjusted_height / 2;
				$int_height = $half_height - $h_height;
				imagecopyresampled($dimg,$simg,0,-$int_height,0,0,$nw,$adjusted_height,$w,$h);
			} else {*/
				//imagecopyresampled($dimg,$simg,0,0,0,0,$nw,$nh,$w,$h);
			/*}*/
			imagejpeg($dimg,$source_path.$dest_name.$source_image_name,100);
		}
	}








?>