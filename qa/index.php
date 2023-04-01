
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <link href="css/sidebar.css" rel="stylesheet" />
    <link href="css/login.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="css/images/logo.png"/>
    <title>Bestlink College of the Philippines </title>



    <!-- Boxicons CDN Link -->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />






  </head>
  <body>
    <div class="loginContainer">
      <div class="d-lg-flex position-relative">
        <div class="d-flex logoContainer">
          <div class="polygon1 position-relative">
            <img class="logo" src="css/images/newLogin/logo.png" alt="bcp-logo" />
          </div>
          <div class="polygon2"></div>
        </div>
        <div
          class="form-container d-flex justify-content-center w-100 p-3 p-lg-5"
        >
          <div class="m-auto">
            <div class="form-header1 ps-2 mb-5">
              <h1 class="header1 fw-bold fs-1 m-0">BCP</h1>
              <h1 class="header2 fw-bold fs-1 m-0">QUALITY ASSURANCE</h1>
            </div>


            <form method="post" action="includes/login_logic.php">
              <span class="loginLineBreak my-4"></span>
              <div class="mb-3">
                <label
                  class="form-label fw-semibold fs-6"
                >
                  Username
                </label>
                <input
                  type="username"
                  class="inputField input-form form-control px-3 fs-6 fw-normal"
                  id="user_email"
                  name="user_email"
                  aria-describedby="emailHelp"
                />
              </div>
              <div class="mb-3">
                <label
                  class="form-label fw-semibold fs-6"
                >
                  Password
                </label>
                <div id="login">
                  <div class="passwordContainer">
                    <input
                      type="password"
                      class="inputField input-form form-control px-3 fs-6 fw-normal"
                      id="inputPassword"
                      name="user_password"
                    />

                    <i class="fa-solid fa-eye-slash" id="passwordIconId"></i>
                  </div>
                </div>
              </div>

  <input type="checkbox" id="agree-terms" name="agree-terms" required>           
  <label for="agree-terms">I agree to the <a href="#modal">Terms and Conditions:</a></label>

 <div id="modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
   <h2>Terms and Conditions</h2>
  <p class="text-justify">
        <b class="title">Statement of Privacy Policy</b><hr> 
        <b>BESTLINK COLLEGE OF THE PHILIPPINES, INC .( BCP )</b> is committed to abide  by and adhere  to the provisions  of Philippine Republic Act No. 10173, also known as, the Data Privacy Act of 2012 and its Implementing Rules and Regulations.
        BCP commits itself to protect the privacy of its data subjects (individuals it deals with, current, past and prospective) as well as to ensure that the personal data gathered as provided by such subjects shall be safeguarded and secured while under its control and custody. This data privacy policy will outline the manner by which the data gathered will be properly utilized and the process of doing so; the measures to be undertaken for purposes of keeping it secure, its appropriate use and disposal when no longer deemed necessary; and provide information to the data subjects about their rights under RA#10173.
        <br>
        For the above purpose this Data Privacy Notice and Consent Form may be amended at any time without prior notice, and such amendments will be notified to you via BCP’s website or email.
        <br>
        <br>
        
        <b class="title">Privacy Notice</b><hr> 
        <strong class="subtitle-1 font-weight-bold">Information Collected</strong>
        <p>
        BCP collects, stores, and processes personal data from its current, past and prospective students, starting with the information provided at application through the information collected throughout the whole course of their study at the BCP. This will include: 
        <br>
        </p><ul class="pt-1">
            <li>Contact information, such as, name, addresses, telephone numbers, email addresses and other contact details;</li>
            <li>Personal information, such as date and place of birth, nationality, immigration status, religion, civil status, student ID, government-issued IDs, web information, recommendations and assessment forms from previous schools, etc.;</li>
            <li>Family background, including information on parents, guardians, siblings, etc.;</li>
            <li>Photographic and biometric data, such as, photos, CCTV videos, fingerprints, handwriting and signature specimens;</li>
            <li>Student's school works, including data gathered using third party online learning tools Health records, psychological evaluation results, disciplinary records, and physical fitness information;</li>
            <li>Student Cumulative Guidance Folder, which includes interviews, guidance assessments, special needs, exclusions/behavioral information, etc.;</li>
            <li>Permanent Student Academic Records, including transcripts and the academic history of the student in BCP;</li>
            <li>Student extra-curricular activities, résumés, job interview forms; and,</li>
            <li>Financial and billing information.</li>
        </ul>
        <p></p>

        <br>
        <strong class="subtitle-1 font-weight-bold">Use of Information</strong>
        <p>
        The collected personal data is used solely for the following purposes: 
        <br>
        </p><ul class="pt-1">
            <li>Processing of admission application and student selection (and to confirm the identity of prospective students and their parents);</li>
            <li>Verifying authenticity of student records and documents;</li>
            <li>Processing of scholarship applications and its on-going requirements;</li>
            <li>Processing of enrollment and registration;</li>
            <li>Supporting student learning, and validating students’ program of study based on curriculum requirements, and other activities and experiences forming part of the student’s formation and education;</li>
            <li>Supporting the student’s well-being and providing medical services and guidance counselling;</li>
            <li>Monitoring and reporting on student progress; processing of evaluations, exam results, and grades;</li>
            <li>Monitoring and ensuring the safety of all students within the BCP campus;</li>
            <li>Processing and generating statements of accounts;</li>
            <li>Processing of application for graduation;</li>
            <li>Evaluation for board examinations;</li>
            <li>Documentation of students’ data;</li>
            <li>For accreditation, professional development of teachers and staff, and research, e.g., evaluation studies by the research desk, action research by teachers, etc.;</li>
            <li>Posting or displaying of academic and non-academic achievements within the BCP premises and/or its official website and social media accounts;</li>
            <li>Marketing and promoting BCP, its students, employees, and other academic and non-academic and/or school activities inside and outside the campus; and,</li>
            <li>Providing Library services, running an outreach program, family council purposes, job postings, practicums, internships, employment.</li>
        </ul>
        <p></p>
        <br>

        <strong class="subtitle-1 font-weight-bold">Information Sharing</strong>
        <p>
        Personal data under the custody of BCP shall be disclosed only to authorized recipients of such data. Otherwise, we will share your personal data with third parties, other than your parents and/or guardian on record for minors, only with your consent, or when required or permitted by our policies and applicable law, such as with: 
        <br>
        </p><ul class="pt-1">
            <li>Regulatory authorities, courts, and government agencies, e.g., Department of Education, Commission on Higher Education, etc.;</li>
            <li>The Association of Christian Schools, Colleges and University Accrediting Agency (ACSCU-AAI), a service organization which accredits academic programs that meet commonly accepted standards of quality education;</li>
            <li>Service Providers who perform services for us and help us support your learning, monitor and report on your progress, manage the operations of our school, and assess how well BCP is doing; and,</li>
            <li>Business partners and other academic linkages who provide internships and job opportunities to our graduates.</li>
        </ul>
        <p></p>
        <br>

        <strong class="subtitle-1 font-weight-bold">Data Transfer</strong>
        <p>
        Where BCP consider it necessary or appropriate, for the purposes of data storage, processing, providing any service or product on our behalf to you, or implementing an academic linkage program, we may transfer your personal data to third parties within or outside of the Philippines, under conditions of confidentiality and similar levels of security safeguards.  
        </p>
        <br>

        <strong class="subtitle-1 font-weight-bold">Security</strong>
        <p>
            We continue to implement organizational, administrative, technical, and physical security measures to safeguard your personal data. 
            <br>
            <br>
            Only authorized personnel have access to them, the exchange of which is facilitated through internal shared servers, email, and paper files.  
            <br>
            <br>
            Should third parties need access to your personal data, we require some form of data sharing agreement with them, in compliance with the DPA and the DPA-IRR. 
            <br>
            <br>
            Your paper and digital files are securely stored employing physical security to safeguard the paper files and technical security to protect the digital files.  
        </p>
        <br>

        <strong class="subtitle-1 font-weight-bold">Retention of Information</strong>
        <p>
            We keep your paper and digital files only for as long as necessary. 
            <br>
            <br>
            a) The Permanent Student Academic Records are kept by the Basic Education (BED) Records Office or the Higher Education (HED) Registrar’s Office for 75 years after last graduation from BCP.  
            <br>
            b) The BED and HED Admission files are kept for five years. 
            <br>
            c) Application forms and documents of unsuccessful applicants are kept by the Admissions Office – five years for BED and two years for HED.  
            <br>
            d) Scholarship application forms and supporting documentation are kept by the HED Office of Student Affairs for four years, or until the scholar graduates. 
            <br>
            e) The Student Cumulative Guidance Folders are kept by the Guidance Office for five years after graduation. 
            <br>
            f) Student school works are kept for five years, but, in a some cases, selected student works may be retained for ten years as exemplars. 
            <br>
            g) Student disciplinary records are stored by the Office of Student Affairs, for five years after graduation. 
            <br>
            h) The class records are kept for one year after graduation. 
            <br>
            i) Non-academic records, e.g., service records for HED scholars, extra-curricular activities, emergency contact forms, etc. are kept for five years. 
            <br>
            j) Financial and billing information are kept by the Finance Office for ten years. 
            <br>
            k) The Clinic retains health records for five years after graduation. 
            <br>
            l) CCTV cameras are the responsibility of Facilities; some cameras have memory for a month of CCTV videos, and older ones for less. The cameras run continuously on a rolling basis, where older videos are overwritten as the memory fills up. 
            <br>
            <br>
            When your personal data is no longer needed, we take reasonable steps to securely destroy such information or permanently de-identify it. Paper files are securely shredded and electronic information is deleted applying <i>Secure Erase</i> so that this is no longer recoverable nor reproducible.
        </p>
        <br>

        <strong class="subtitle-1 font-weight-bold">Your rights</strong>
        <p>
           You have the right to be informed, to object processing, access and rectification, to suspend or to withdraw your personal data, including, any such information held by third parties, with whom BCP has data sharing agreement; and be indemnified in case of damages pursuant to the provisions of the DPA and the DPA-IRR. 
           <br>
           <br>
           If you want to exercise any of your rights, or if you have any question about how we process your personal data, please contact BCP’s Data Protection Officer, through the following channels:
           <br>
           Email to <a href="mailto:dpo@bcp.edu.ph">dpo@bcp.edu.ph</a>
           <br>
           Call the Trunkline (417-4355)
           <br>
           Write to:
           <br>
           The Data Protection Officer 
           <br>
           BESTLINK COLLEGE OF THE PHILIPPINES, INC
           <br>
           #1071 Brgy. Kaligayahan, Quirino Highway Novaliches Quezon City, Philippines 1123 
           <br>
           <br>
           If you have concern or complaint about the way we are collecting or using your personal data, you should raise your concern with us in the first instance.    
        </p>
        <br>
        </p>
     <p>&copy; 2023 Bestlink College of the Philippines. All rights reserved.</p>
  </div>
</div>
  <br>
 
              <button
                type="submit"
                class="buttonTemplate sumbit-button btn rounded-2 w-100 mt-3"
                name="login"
                disabled
              >
                Log in
                <!-- <i class="bx bx-log-in"></i> -->
 
            </form>
          </div>
        </div>
      </div>
    </div>
    </button>

  <!-- Hidden modal window -->
<div id="login-error-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p id="login-error-message"></p>
  </div>
</div>
<script>
  document.getElementById("agree-terms").addEventListener("change", function() {
    document.querySelector("button[type=submit]").disabled = !this.checked;
  });
</script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
<script>
  var modal = document.getElementById("modal");
  var link = document.getElementsByTagName("a")[0];
  var close = document.getElementsByClassName("close")[0];
  
  link.onclick = function() {
    modal.style.display = "block";
  }
  
  close.onclick = function() {
    modal.style.display = "none";
  }
</script>
    <script>
      let showPassword = document.querySelector("#passwordIconId");
      const passwordField = document.querySelector("#inputPassword");

      showPassword.addEventListener("click", function () {
        this.classList.toggle("fa-eye");

        const type =
          passwordField.getAttribute("type") === "password"
            ? "text"
            : "password";
        passwordField.setAttribute("type", type);
      });
    </script>


   
  </body>
</html>
