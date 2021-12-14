<?php
include "./html/head.html";
include "./html/header.html";
include "./html/footer.html";
include "./html/foot.html";

 ?>
 <main>
     <section class="content_section">
         <div class="content_div">
             <br>
             <svg height="80" width="200">
                 <text x="10" y="20" fill="White" transform="rotate(15 20,40)">Contact US</text>
             </svg>
             <br>
         </div>
         <br>
         <p class="aside_p">We'd love to hear from you!</p>
         <form class="contact_form flex-item" action="./scripts/script.php" autocomplete="off" method="post">
             <div class="row input-container">
                 <div class="col-xs-12">
                     <div class="styled-input wide">
                         <input class="input_cu" type="text" name="firstname" required />
                         <label class="label_cu">Firstname</label>
                     </div>
                 </div>
                 <div class="col-md-6 col-sm-12">
                     <div class="styled-input">
                         <input class="input_cu" type="text" name="lastname" required />
                         <label class="label_cu">Lastname</label>
                     </div>
                 </div>
                 <div class="col-md-6 col-sm-12">
                     <div class="styled-input" style="float:right;">
                         <input class="input_cu" type="email" name="email" required />
                         <label class="label_cu">Email</label>
                     </div>
                 </div>
                 <div class="col-xs-12">
                     <div class="styled-input wide">
                         <textarea class="textarea_cu" name="message" required></textarea>
                         <label class="label_cu">Message</label>
                     </div>
                 </div>
                 <div class="col-xs-12">
                     <div class="styled-input wide">
                         <label class="lable_select_option">Priority:
                             <select name="prios" id="prios">
                                 <option value="High">High</option>
                                 <option value="Medium">Medium</option>
                                 <option value="Low">Low</option>
                             </select>
                         </label>
                     </div>
                 </div>
                 <div class="col-xs-12">
                 <button class="button_submit">Send Message</button>
                 </div>
             </div>
         </form>
         <br><br>
     </section>
 </main>
