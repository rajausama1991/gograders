importScripts('https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.7.0/firebase-messaging.js');
const firebaseConfig = {
    apiKey: "AIzaSyCQYYemtXPdrer3xdxL0zcBr_0ZVre1bkA",
    authDomain: "essaygurus-df3ff.firebaseapp.com",
    projectId: "essaygurus-df3ff",
    storageBucket: "essaygurus-df3ff.appspot.com",
    messagingSenderId: "857297552308",
    appId: "1:857297552308:web:6c1eba39295bcbeb79a8e1",
    measurementId: "G-42RM3QYB77"
  };
firebase.initializeApp(firebaseConfig); 
const messaging=firebase.messaging();
messaging.setBackgroundMessageHandler(function (payload){
console.log(payload)
const notification = JSON.parse(payload);
const notificationOption = {
  body:notification.body,
  icon:notification.icon,
};
return self.ServiceWorkerRegistration.showNotification(payload.notification.title,notificationOption);
})