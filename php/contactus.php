<div class="mediumcontainer  flex justify-around wrap-wrap">
<div class="title centerMeInANewLine"> <img src="img/contactus.png"> </div>
<ul id="contactussocialbuttons">
    <div class="contactusdetails"><img src="../svg/email.svg" class="contactusicon"><p>info@shebatech.com</p></div>
    <div class="contactusdetails"><img src="../svg/telephone.svg" class="contactusicon"><p>+1(403)890-8700</p></div>
    <div class="contactusdetails"><img src="../svg/location.svg" class="contactusicon"><p>193 Hidden Creek Rd NW</p></div>
</ul>
<form action="/php/mail.php" method="POST" id="form">
    <ul>
        <input type="text" name='name' id="formname" placeholder="Your Name"/>
        <input type="email" name='email' id="formemail" placeholder="Your Email"/>
    </ul>
    <ul>
        <textarea id="formmessage" name="msg" placeholder="Message" rows="7"></textarea>
    </ul>
    <ul>
        <input type="submit" id="submit"/>
    </ul>
</form>
<div class="mediumcontainer">