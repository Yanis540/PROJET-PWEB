<?php 
   if(isset($_POST['submit-contact'])&&$_POST['submit-contact']==$_SESSION['rand_contact'])
   { 
    echo "
        <script>
            document.body.classList.add('great');
        </script>
    ";
   }


?>
<div id='contact'class="contact-page impaire">
    <div class="contacting">
        <div class="contact-element contact-infos">
            <div class="contact-infos-up">
                <div class="contact-logo">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-20 -100 400 400">
                                <defs></defs>
                                    <title>Micro Club's Logo</title>
                                    <g>
                                        <g id="Blue_logo_-_With_White_Background">
                                            <g>
                                                <path class="cls-1"
                                                        d="M357.42,5.67V183.13a5.67,5.67,0,0,1-5.68,5.67H208.32a5.67,5.67,0,0,1-5.67-5.67v-3.71a5.67,5.67,0,0,1,5.65-5.68c8.11,0,16.12.61,24.11.61,9.82,0,20.24-.62,30.25.5,5.35.59,10.59,3,16.39,4a141.67,141.67,0,0,0,50.08-.65,5.67,5.67,0,0,0,4.56-4.73c1.77-12.2,2.8-25.14,4.29-37.62a5.67,5.67,0,0,0-7.12-6.16c-11.43,3.13-22.64,6.27-33.95,3.83-20.06-4.32-40.07-30.33-28.28-56.28a44.18,44.18,0,0,1,9.42-12.46,45.72,45.72,0,0,1,12.9-8c12.24-4.64,26.71-2.65,38,1.63a5.66,5.66,0,0,0,7.62-6.1q-2.73-18.93-5.37-37.94a5.72,5.72,0,0,0-4.51-4.79C312.56,6.65,298.2,6,284,9c-4.63,1-8.89,3-13.38,3.48-5.68.6-11.76.26-17.38.51-14.32.63-29.15,1.48-44.79,1.87a5.66,5.66,0,0,1-5.79-5.67V1.5c-.05-.71-.08-1.41.49-1.5h148.6A5.67,5.67,0,0,1,357.42,5.67Z"/>
                                                <path class="cls-1"
                                                        d="M231.92,154.93a55.27,55.27,0,0,0,4.82,4.79A1.89,1.89,0,0,1,235.5,163c-10.43.28-20.62.81-30.87,1.3a1.89,1.89,0,0,1-2-1.89V147.16a1.88,1.88,0,0,1,2.1-1.87c7.2.84,13.93-1.4,19.23.67,3.43,1.33,5.65,6.28,7.94,9"/>
                                                <path class="cls-1"
                                                        d="M239.34,26.9c-2.12,4.9-7,7.07-10.14,10.94A3.07,3.07,0,0,1,227,39c-6.78.4-13.9.45-21.13.42a3.22,3.22,0,0,1-3.19-3.22v-7.8a3.22,3.22,0,0,1,3.36-3.2c11.77.43,25.6-3.24,33.33,1.74"/>
                                                <path class="cls-1"
                                                        d="M217,135.5h-12.5a1.9,1.9,0,0,1-1.89-1.9V112.49a1.89,1.89,0,0,1,1.89-1.89h4.09a1.89,1.89,0,0,1,1.84,1.41c2,8,3.23,16.79,6.57,23.49"/>
                                                <path class="cls-1"
                                                        d="M218,53.8c-.19,4.64-2.54,7.12-4,10.52A2.76,2.76,0,0,1,211.83,66c-2,.2-4.19.14-6.22.28a2.76,2.76,0,0,1-3-2.76V53a2.76,2.76,0,0,1,2.71-2.77c5.5-.1,10.5.32,12.68,3.56"/>
                                                <path class="cls-1"
                                                        d="M204.8,79.71h2.56A2.15,2.15,0,0,1,209.5,82c-.26,4.56-.91,8.74-.92,13.56a2.14,2.14,0,0,1-1.83,2.09c-.51.07-1,.2-1.45.31a2.15,2.15,0,0,1-2.65-2.09v-14A2.15,2.15,0,0,1,204.8,79.71Z"/>
                                                <path class="cls-1"
                                                        d="M185.29,77.72a200.77,200.77,0,0,1,2.41,20.71,1.16,1.16,0,0,1-1.12,1.23c-16.19.42-45.25,1.76-51.25,2a1.16,1.16,0,0,1-1.2-1l-.3-3.12-1.33,3.39a1.14,1.14,0,0,1-1,.73c-5.61.24-41.44,1.71-60.9,2.43a2.58,2.58,0,0,1-2.43-1.39l0,0a1.15,1.15,0,0,0-2.16.43c-.2,2,0,4.13-.21,6C63.33,131,60.3,156.45,57.92,179.3a1.16,1.16,0,0,1-1.15,1H1.15A1.15,1.15,0,0,1,0,179c9.79-55,18.66-111,28.5-165.91a1.36,1.36,0,0,0,0-.2v-1.4H78.17a1.18,1.18,0,0,1,1.15.87c.52,2.05,1.53,3.59,2,5.63a1.15,1.15,0,0,1-1.15,1.4c-3.92-.06-6.85.86-11,.57,3.11,1.09,8.13.28,12.15.45l1,.76c2.71,7.14,5.47,14.2,7.73,21.77l-1.06,1.5c-6.87.37-13.62.88-20.83.92a184,184,0,0,0,22.5,1,1.17,1.17,0,0,1,1.1.76c2.67,7.09,5,14.48,7.83,21.46a2.7,2.7,0,0,1-2.2,3.66c-1.29.16-2.61.29-3.94.41a1.15,1.15,0,0,0,.08,2.3c2.33.06,4.62.15,6.86.31,1-.25,1.44,0,1.71.47a1.14,1.14,0,0,0,2,0,1.13,1.13,0,0,1,1.28-.48c26.39,1,53.44,1.47,79.87,2.49"/>
                                                <path class="cls-1"
                                                        d="M182.31,49.32c.33,6.65,1.48,12.45,2,18.93h0c-26.19,1.09-52.34,2.22-77.88,4h0c-1.42-1.4.37-3.75,1-5.48,1.92-5.29,4.54-12.54,7-17.93h0c0-.71-.09-1.41.51-1.5,22.77.37,45.33,1,67.44,2"/>
                                                <path class="cls-1"
                                                        d="M178.85,22.91c.79,4.77,1.45,9.67,1.82,14.87l-2.43,2.64c-19.71.59-39,1.58-58.16,2.7a2.5,2.5,0,0,1-2.51-3.3,161.84,161.84,0,0,1,6.48-16.93l2.36-1.4c17.17.8,35.14.76,52.44,1.42"/>
                                                <path class="cls-1"
                                                        d="M177.87,11.46v3c-1.22,1.9-3.92,1.38-6,1.49-14.62.8-30.87,1-46.12,1.5,1.2-2,1.24-5.06,3-6.47,16.2.32,33.73-.67,49.13.49"/>
                                                <path class="cls-1"
                                                        d="M130.23,106.61c-3.67,10.18-7.77,20-11.89,29.68l-1.79,1.31c-10.64.87-22.52.51-33.29,1.26L81.1,137.4c-3.39-10.22-7.53-19.69-10.94-29.9a2.14,2.14,0,0,1,2.1-2.8c19.41.53,38.88,1,58,1.91"/>
                                                <path class="cls-1"
                                                        d="M116.35,141.48c-3,7.91-6.12,15.64-9.29,23.36l-2.32,1.55H93.8l-2.35-1.68c-2.54-7.15-5.54-13.84-7.84-21.24a2.51,2.51,0,0,1,2.52-3.26c9.94.57,20.53.45,30.22,1.27"/>
                                                <path class="cls-1"
                                                        d="M105.42,168.87c-.75,2.7-2.35,5.19-3.47,8-.74,1.87-1,4.25-2,6L98,182.55c-1.33-4.48-3.33-8.28-4.62-12.8l1.09-1.35c3.67.13,6.84.78,10.94.47"/>
                                                <path class="cls-1"
                                                        d="M195.56,184.42,145,185.72a2.62,2.62,0,0,1-2.66-2.29L141.55,173a2.63,2.63,0,0,1,2.67-3L195,171.38a2.61,2.61,0,0,1,2.51,2.18l.59,7.81A2.62,2.62,0,0,1,195.56,184.42Z"/>
                                                <path class="cls-1"
                                                        d="M191.94,164.36l-47.7,1.25a3.35,3.35,0,0,1-3.42-3l-2-17.4a3.35,3.35,0,0,1,3.51-3.74l47.8,2.51a3.35,3.35,0,0,1,3.14,2.88l1.95,13.63A3.37,3.37,0,0,1,191.94,164.36Z"/>
                                                <path class="cls-1"
                                                        d="M189,111.25l3.19,20.25a3.6,3.6,0,0,1-3.46,4.16l-47.22,1.25a3.6,3.6,0,0,1-3.66-3.1l-3.25-22.73a3.61,3.61,0,0,1,3.67-4.11l47.26,1.24A3.62,3.62,0,0,1,189,111.25Z"/>
                                            </g>
                                        </g>
                                    </g>
                        </svg>
                </div>
                <h2 class="contact-title">Micro Club</h2>
            </div>
            <div class="contact-infos-center">
                <h2 class="contact-more">Email : <span> micro-club@usthb.dz</span></h2>
                <h2 class="contact-more">President Phone : <span> 0558 52 11 45 </span></h2>
                <h2 class="contact-more">External Relationship Phone :<span> 0542 17 01 14</span></h2>
                <h2 class="contact-more">Location : <span> Room 148 Department of informatic in the USTHB</span></h2>
            </div>
        </div>
        <div class="contact-element contact-form">
            <h1 class="contact-title">Your Feedbacks</h1>
            <div class="form">
                <?php
                    $rand_contact=rand();
                    $_SESSION['rand_contact']=$rand_contact;
                ?>
                <form id='contact-form' action="" method="POST">
                    <div class="class-input">
                        <input type="email" id="contact-email"name="contact-email" class="form-input" autocomplete="off" placeholder=" ">
                        <label for="contact-email" class="form-label">Email:</label>
                    </div>
                    <p>We need your email to respond to your message.</p>
                    <div class="class-input">
                        <textarea type="text" id="contact-message"name="contact-message" class="form-input message-textarea" autocomplete="off" placeholder=" "></textarea>
                        <label for="contact-message" id="contact-message-label" class="form-label">Message:</label>
                    </div>
                    <button name='submit-contact' value="<?php echo $rand_contact; ?>"type="submit" id="contact-button" class="submit-button">SEND IT </button>
                </form>
                </div>
        </div>
        <div class="contact-element contact-social">
            <h2 class="find-us">You can find us in </h2>
            <div class="socials">
                <div class="social">
                    <a href="https://www.facebook.com/Micro.Club.USTHB/" target="_blank">
                        <i class="fa-brands fa-facebook fa-2xl"></i>
                    </a>
                </div>
                <div class="social">
                    <a href="https://www.instagram.com/microclub_usthb/" target="_blank">
                        <i class="fa-brands fa-instagram fa-2xl"></i>
                    </a>
                </div>
                <div class="social">
                    <a href="https://github.com/MicroClub-USTHB" target="_blank">
                        <i class="fa-brands fa-github fa-2xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <h2 class="end-website">© Micro Club - coded with sweat and blood.</h2>
</div>