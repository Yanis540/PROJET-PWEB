
<div class="modal" id="modal">
    <div class="modal-header">
        <div class="modal-title">Register</div>
        <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        <div class="modal-form">
            <h1 class="form-title">Form:</h1>
            <form id='register-form'action="index.php" method="POST" class="separate">
                <div class="class-input">
                    <input type="number" id="matricule"name="matricule" class="form-input" autocomplete="off" placeholder=" ">
                    <label for="matricule" class="form-label">Matricule:</label>
                </div>
                <div class="class-input">
                    <input type="text" id="first-name"name="first-name" class="form-input" autocomplete="off" placeholder=" ">
                    <label for="first-name" class="form-label">First Name:</label>
                </div>
                <div class="class-input">
                    <input type="text" id="last-name"name="last-name" class="form-input" autocomplete="off" placeholder=" ">
                    <label for="last-name" class="form-label">Last Name:</label>
                </div>
                <div class="class-input">
                    <input type="email" id="register-email"name="register-email" class="form-input" autocomplete="off" placeholder=" ">
                    <label for="register-email" class="form-label">Email:</label>
                </div>
                <div class="class-input">
                    <input type="number" id="register-phone"name="register-phone" class="form-input" autocomplete="off" placeholder=" ">
                    <label for="register-phone" class="form-label">Phone Number:</label>
                </div>
                <div class="class-input">
                    <select name="register-year" id="register-year" class="form-input" >
                        <option value="L1" default>L1</option>
                        <option value="L2">L2</option>
                        <option value="L3">L3</option>
                        <option value="M1">M1</option>
                        <option value="M2">M2</option>
                    </select>
                    <label for="register-year" id="register-year-label" class="form-label">Year:</label>
                </div>
                <div class="class-input">
                    <select name="register-faculty" id="register-faculty" class="form-input" >
                        <option value="FEI" default>FEI</option>
                        <option value="FMT" >FMT</option>
                        <option value="FMC" >FMC</option>
                        <option value="FSG">FSG</option>
                        <option value="FSB">FSB</option>
                        <option value="FPH">FPH</option>
                        <option value="FCH">FCH</option>
                        <option value="FGC">FGC</option>
                        <option value="FGP">FGP</option>
                    </select>
                    <label for="register-faculty" id="register-faculty-label" class="form-label">Faculty:</label>
                </div>
                <p>Show us your motivations to join us </p>
                <div class="class-input">
                    <textarea type="text" id="register-message"name="register-message" class="form-input message-textarea" autocomplete="off" placeholder=" "></textarea>
                    <label for="message" id="register-message-label" class="form-label">Message:</label>
                </div>
                
                <button name='submit-register' type="submit" id="register-button" class="submit-button">SEND IT </button>
            </form>
        </div>
        <div class="modal-animations">
            <svg class="moon-svg moon-form" xmlns="http://www.w3.org/2000/svg" width="311" height="210" viewBox="0 0 311 210">
                <defs>
                    <style>
                    
                    .moon{ animation: clouds 12s infinite ease-in-out; }
                    @-webkit-keyframes clouds { 0% {-webkit-transform: translate(60px,15px);transform: translate(60px,15px);} 25% {-webkit-transform: translate(50px,22px);transform: translate(50px,22px)} 50% {-webkit-transform: translate(60px,30px);transform: translate(60px,30px);} 75% {-webkit-transform: translate(70px,22px);transform: translate(70px,22px);} 100% {-webkit-transform: translate(60px,15px);transform: translate(60px,15px);} }
                    @keyframes clouds { 0% {-webkit-transform: translate(60px,15px);transform: translate(60px,15px);} 25% {-webkit-transform: translate(50px,22px);transform: translate(50px,22px)} 50% {-webkit-transform: translate(60px,30px);transform: translate(60px,30px);} 75% {-webkit-transform: translate(70px,22px);transform: translate(70px,22px);} 100% {-webkit-transform: translate(60px,15px);transform: translate(60px,15px);} }
                    </style>
                </defs>
                <g id="Group_38" transform="translate(0 0)">
                    <circle id="Ellipse_1" class="moon" cx="93.5" cy="93.5" r="82" transform="translate(60 15)"/>
                    <rect id="Rectangle_34"  class="cls-2" width="80" height="18" rx="9" transform="translate(100 76)"/>
                    <rect id="Rectangle_35"  class="cls-2" width="65" height="13" rx="6.5" transform="translate(146 111)"/>
                    <rect id="Rectangle_39"  class="cls-1" width="181" height="13" rx="6.5" transform="translate(10 158)"/>
                    <rect id="Rectangle_38"  class="cls-1" width="101" height="13" rx="6.5" transform="translate(110 141)"/>
                    <rect id="Rectangle_42"  class="cls-1" width="69" height="13" rx="6.5" transform="translate(208 81)"/>
                    <rect id="Rectangle_40"  class="cls-1" width="109" height="13" rx="6.5" transform="translate(163 187)"/>
                    <rect id="Rectangle_41"  class="cls-1" width="53" height="13" rx="6.5" transform="translate(60 187)"/>
                    <rect id="Rectangle_36"  class="cls-2" width="56" height="14" rx="7" transform="translate(71 127)"/>
                    <rect id="Rectangle_37"  class="cls-1" width="56" height="14" rx="7" transform="translate(31 102)"/>
                </g>
            </svg>
        </div>
    </div>
</div>