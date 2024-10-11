<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Information || CodeChums</title>
    <!-- link custom css file -->
     <link rel="stylesheet" href="./assets/css/style.css">
     <link rel="stylesheet" href="./assets/css/form.css">

     <!-- link box icons cdn -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>



</head>
<body>

    <header>
        <nav>
            <a href="./index.php" class="nav_image">
                <img src="./assets/logo.svg" alt="CodeChums" width="180" class="nav_logo">
            </a>

            <span class="view_data">
                <a href="./assets/php/data.php" target="_blank">
                    <i class='bx bx-street-view' title="View all data..."></i>
                </a>
            </span>
        </nav>
    </header>

    <main>
        <div class="form_head">
            <h1>Fill all your information</h1>
            <p>Create the contact terms with this guided process</p>
        </div>

        <!-- Main Form -->
        <form action="./assets/php/submit.php" method="POST">
            
            <!-- personal information -->
             <div class="input">
                <h3>Personal Information</h3>

                <!-- input group or grid -->
                 <div class="input_grid">
                    <!-- input group -->
                     <div class="input_group">
                        <label class="light_label" for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name" placeholder="Enter your first name" required>
                     </div>

                     <!-- 2nd input group -->
                     <div class="input_group">
                        <label class="light_label" for="last_name">Last Name</label>
                        <input type="text" name="last_name" id="last_name" placeholder="Enter your last name" required>
                     </div>
                 </div>

                 <!-- 2nd input grid -->
                 <div class="input_grid">
                    <!-- input group -->
                     <div class="input_group">
                        <label class="light_label" for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email address" required>
                     </div>

                     <!-- 2nd input group -->
                     <div class="input_group">
                        <label class="light_label" for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter a password" required>
                     </div>
                 </div>

                 <!-- 3rd input grid -->
                 <div class="input_grid">
                    <!-- input group -->
                     <div class="input_group">
                        <label class="light_label" for="select_gender">Gender</label>
                            
                            <!-- gender flex -->
                             <div class="gender_flex">
                                <!-- male -->
                                <div class="gender">
                                    <label for="male">
                                        <input type="radio" name="gender" id="male" value="Male"> Male
                                    </label>
                                </div>
                                
                                <!-- female -->
                                <div class="gender">
                                    <label for="female">
                                        <input type="radio" name="gender" id="female" value="Female"> Female
                                    </label>
                                </div>

                                <!-- other -->
                                <div class="gender">
                                    <label for="other">
                                        <input type="radio" name="gender" id="other" value="Other"> Other
                                    </label>
                                </div>
                             </div>
                     </div>

                     <!-- 2nd input group -->
                     <div class="input_group">
                        <label class="light_label" for="blood_group">Blood Group</label>
                        
                        <!-- select box for blood group -->
                         <select name="blood_group" id="blood_group" required>
                            <!-- options -->
                             <option selected disabled>-- Select your blood group --</option>
                             
                             <!-- option group positive -->
                              <optgroup label="Positive">
                                <option value="O+">O+</option>
                                <option value="A+">A+</option>
                                <option value="B+">B+</option>
                              </optgroup>

                             <!-- option group negative -->
                              <optgroup label="Negative">
                                <option value="O-">O-</option>
                                <option value="A-">A-</option>
                                <option value="B-">B-</option>
                              </optgroup>
                         </select>
                     </div>
                 </div>

                 <!-- 4th input grid -->
                 <div class="input_grid">
                    <!-- input group -->
                     <div class="input_group">
                        <label class="light_label" for="religion">Religion</label>
                        <select name="religion" id="religion" required>
                            <option selected disabled>-- Select your religion --</option>
                            <option value="Muslim">Muslim</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddhist">Buddhist</option>
                            <option value="Christian">Christian</option>
                        </select>
                     </div>

                     <!-- 2nd input group -->
                     <div class="input_group">
                        <label class="light_label" for="country">Country</label>
                        <select name="country" id="country" required>
                            <option selected disabled>-- Select your country --</option>
                            
                            <!-- option group -->
                             <optgroup label="A">
                                <!-- option -->
                                 <option value="Afghanistan">Afghanistan</option>
                                 <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                 <option value="Argentina">Argentina</option>
                                 <option value="Australia">Australia</option>
                                 <option value="Azerbaijan">Azerbaijan</option>
                                 <option value="America">America</option>
                             </optgroup>

                             <!-- country start in B -->
                             <optgroup label="B">
                                <!-- option -->
                                 <option value="Brazil">Brazil</option>
                                 <option value="Bangladesh">Bangladesh</option>
                                 <option value="Burundi">Burundi</option>
                                 <option value="Belgium">Belgium</option>
                                 <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                 <option value="Barbados">Barbados</option>
                             </optgroup>

                             <!-- country start in C -->
                             <optgroup label="C">
                                <!-- option -->
                                <option value="China">China</option>
                                 <option value="Colombia">Colombia</option>
                                 <option value="Canada">Canada</option>
                                 <option value="Cameroon">Cameroon</option>
                                 <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                 <option value="Costa Rica">Costa Rica</option>
                             </optgroup>
                        </select>
                     </div>
                 </div>

                 <!-- 5th grid -->
                 <div class="input_grid">
                    <!-- input group -->
                     <div class="input_group">
                        <label class="light_label" for="choose_sports">Choose your Sports</label>
                        
                        <!-- sports list -->
                         <div class="sports_list">
                            <div class="sport">
                                <label for="cricket">
                                    <input type="checkbox" name="sport[]" id="cricket" value="Cricket"> Cricket
                                </label>
                            </div>

                            <div class="sport">
                                <label for="football">
                                    <input type="checkbox" name="sport[]" id="football" value="Football"> Football
                                </label>
                            </div>

                            <div class="sport">
                                <label for="tennis">
                                    <input type="checkbox" name="sport[]" id="tennis" value="Tennis"> Tennis
                                </label>
                            </div>

                            <div class="sport">
                                <label for="volleyball">
                                    <input type="checkbox" name="sport[]" id="volleyball" value="Volleyball"> Volleyball
                                </label>
                            </div>

                            <div class="sport">
                                <label for="table_tennis">
                                    <input type="checkbox" name="sport[]" id="table_tennis" value="Table Tennis"> Table Tennis
                                </label>
                            </div>

                            <div class="sport">
                                <label for="baseball">
                                    <input type="checkbox" name="sport[]" id="baseball" value="Baseball"> Baseball
                                </label>
                            </div>

                            <div class="sport">
                                <label for="basketball">
                                    <input type="checkbox" name="sport[]" id="basketball" value="Basketball"> Basketball
                                </label>
                            </div>

                         </div>
                     </div>

                     <!-- 2nd input group -->
                     <div class="input_group">
                        <label class="light_label" for="phone">Phone Number</label>
                        <input type="number" name="phone" id="phone" placeholder="Enter your phone number" required>
                     </div>
                 </div>

                 <!-- 6th grid -->
                 <div class="input_grid">
                    <!-- input group -->
                     <div class="input_group">
                        <label class="light_label" for="image" class="label_pinter">Select Image</label>
                        <input type="file" name="user_image" id="image" required>
                     </div>

                     <!-- 2nd input group -->
                     <div class="input_group">
                        <label class="light_label" for="birth">Date of Birth</label>
                        <input type="date" name="date_of_birth" id="birth" required>
                     </div>
                 </div>

                 <!-- 7th grid -->
                 <div class="input_grid">
                    <!-- input group -->
                     <div class="input_group">
                        <label class="light_label" for="address">Address</label>
                        <input type="text" name="address" id="address" required placeholder="Your address">
                     </div>

                     <!-- 2nd input group -->
                     <div class="input_group">
                        <label class="light_label" for="time">Local Time</label>
                        <input type="datetime-local" name="local_time" id="time" required>
                     </div>
                 </div>

                 <div class="input_group">
                    <label class="light_label" for="scop">Scope of work</label>
                    <div class="overview">
                        <span>Project Overview</span>
                        <p>
                            the project involves redesigning and revamping our existing website to enhance user experience, improve visual appeal, and align with current branding guiedlines.
                        </p>
                    </div>
                </div>

                <button type="submit">Continue</button>




             </div>
        </form>
    </main>
    
</body>
</html>