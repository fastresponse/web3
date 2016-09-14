<?php
require_once '../twig_loader.php';

$renderer = new TemplateRenderer();

$content = <<<'HTML'
<h2>Career Services Department</h2>
<p>
  <span>Phone</span>
  <span><a href="tel:+1-510-849-4009,115">510-849-4009 x115</a></span>
  <span style="white-space: pre;">  |  </span>
  <span>Email</span>
  <span><a href="mailto: career.services@fastresponse.org">career.services@fastresponse.org</a></span>
</p>

<hr>

<h3 style="margin-top: 0;"><a href="/pdf/career_services/FR_Job_Seeking_Skills.pdf">Job Seeking Skills</a></h3>

<h3><a href="/pdf/career_services/FR_Resume_Building.pdf">Resume Building</a></h3>
<ul>
  <li><a href="/documents/career_services/Sample Cover Letter - Referred.doc">Sample Cover Letter - Referred</a></li>
  <li><a href="/documents/career_services/Sample Cover Letter - Not Referred.doc">Sample Cover Letter - Not Referred</a></li>
  <li><a href="/documents/career_services/Sample Resume - EMT.doc">Sample Resume - EMT</a></li>
  <li><a href="/documents/career_services/Sample Resume - Phlebotomy.doc">Sampe Resume - Phlebotomy</a></li>
  <li><a href="/documents/career_services/Sample Resume - Medical Assisting.doc">Sample Resume - Medical Assisting</a></li>
</ul>

<h3><a href="/pdf/career_services/FR_Interview_Skills.pdf">Interview Skills</a></h3>
<ul>
  <li><a href="/documents/career_services/Sample Thank You Letter.doc">Sample Thank You Letter</a></li>
  <li><a href="">Sample Interview Video</a></li>
</ul>
HTML;

$blah = <<<'HTML'
<h2 class="trigger">Job Seeking Skills</h2>
<p>Finding a job is a job within itself! A new career is not going to come to you without effort. An effective job search requires that you actively pursue leads from a variety of sources.</p>
<p>Each day, make it your goal to accomplish at least one of the following action items:</p>
<dl>
  <dt>Change your voice mail message.</dt>
  <dd>Before your resume goes anywhere, make sure that your voice mail message sounds professional. Simply say &quot;This is Jane Smith. I am unable to take your call right now. Please leave your name, telephone number and a brief message and I will get back to you as soon as possible.&quot; Do not use music of any kind on your voice mail.</dd>

  <dt>Create a professional email account.</dt>
  <dd>Many job postings request that you email your resume or application. Use complete sentences and check your spelling, grammar, and spacing. Make sure that your email address is professional. Some combination of your first and last name is best, such as asjsmth@example.com or jane.smith@example.com. Free email accounts can be created at www.gmail.com, www.yahoo.com, and several other sites on the internet.</dd>

  <dt>Find at least one job posting every day.</dt>
  <dd>Set aside an hour daily and try to find one job to apply for every day. Use the library or some other quiet place where you won't be distracted. Look online, check the newspaper, call places that you want to work and ask if they're hiring.</dd>

  <dt>Apply, apply, apply and APPLY MORE OFTEN!</dt>
  <dd>Make sure that you are applying correctly! Most job advertisements tell you if they want a resume and cover letter, salary history or application. If you have questions, or if you're extremely interested in a position, call the company and ask who the Hiring Manager is, and see if you can talk to them about applying for the position. Sometimes they'll be flexible on one of the job requirements, equal amount of experience or foreign language requirements or they'll have a unadvertised position they need to fill. The best way to find out is to call.</dd>
</dl>

<hr>

<h2 class="trigger">Resumes</h2>
<ul>
  <li class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
    <div class="trigger underline">Resume Guidelines</div>
    <div>Writing a good resume is a key part to beginning your job search. There is no set standard resume style or format. These will help you with the essentials you need to begin.</div>
    <h4>Basic Resume Formatting</h4>
    <ul>
      <li>Use a resume header with your current contact information. Include your first and last name, telephone number, address and e-mail. Be sure to use a professional e-mail for employers to contact you.</li>
      <li>Use a common font like Times New Roman.</li>
      <li>Use the same font and size throughout. You may enlarge your name so it stands out. </li>
      <li>Keep resume to 1 page. </li>
    </ul>

    <h4>Sections</h4>
    <ul>
      <li>
      <div>Objective (optional)</div>
      <div>What do you want to do? If you include this section, it should be a sentence or two about your employment goals. A customized objective that describes why you are the perfect candidate for the job can help your resume stand out from the competition.</div>
      </li>

      <li>
      <div>Career Summary or Summary of Qualifications (optional)</div>
      <div>A customized section of your resume that lists key achievements, skills, traits, and experiences can serve a dual purpose. You experience which are relevant to the position lets the prospective employer know that you have taken the time to create a resume that shows how you are qualified for the job.</div>
      </li>

      <li>
      <div>Certifications</div>
      <div>List all certifications relevant to the job you are applying for. This Include your certification and license information. Be sure to include expiration dates.</div>
      </li>

      <li>
      <div>Externships (optional)</div>
      <div>If you do not have work experience or have few jobs to list under Employment history/Experience, it is helpful to fill your resume by including your externships completed.</div>
      </li>

      <li>
      <div>Employment History or Experience</div>
      <div>Include your work history. List the companies you worked for, dates of employment, the positions you held and a bulleted list of responsibilities and achievements. Make sure what you are listing is relevant to the job you are applying for.</div>
      </li>

      <li>
      <div>Education</div>
      <div>List the schools you attended, the degrees you attained, and any special awards and honors you earned. Include Fast Response School of Health Care Education.</div>
      </li>

      <li>
      <div>References</div>
      <div>There is no need to include references on your resume. If you mention that references are available, be sure to have them on hand to furnish upon request.</div>
      </li>

      <li>
      <div>Community Involvement</div>
      <div>List any relevant volunteer work. Be sure to include the dates and names of the organizations.</div>
      </li>
    </ul>

    <h4>Certifications To Include</h4>
    <ul>
      <li>
        <div>EMT</div>
        <ul>
          <li>California State Emergency Medical Technician, EMT-B, <span class="nowrap">(Certificate Number: E289758),</span> Expiration date</li>
          <li>BLS - American Heart Association Certification, Expiration date</li>
          <li>Externships - locations, departments, hours, responsibilities</li>
          <li>Additional related trainings - Wilderness, ACLS</li>
        </ul>
      </li>

      <li>
        <div>Phlebotomy</div>
        <ul>
          <li>California State Certified Phlebotomy Technician, CPT-1, <span class="nowrap">(Certificate Number: CPT87645),</span> Expiration date</li>
          <li>BLS - American Heart Association, Expiration date</li>
          <li>Basic First Aid, Expiration date</li>
          <li>Externships - locations, departments, hours, responsibilities including:</li>
          <ul>
            <li>Performed venipunctures to include ETS, butterfly and syringe methods.</li>
            <li>Performed 100 successful venipunctures on patients throughout life span. </li>
          </ul>
        </ul>
      </li>

      <li>
        <div>Medical Assisting</div>
        <ul>
          <li>California State Certified Medical Assistant, Clinical, Expiration date, <span class="nowrap">(Certificate Number: 45362-17)</span></li>
          <li>Optional: California State Certified Phlebotomy Technician, CPT-1, Expiration date, <span class="nowrap">(Certificate Number: CPT58873)</span></li>
          <li>BLS - American Heart Association, Basic First Aid Certified, Expiration date</li>
          <li>Externships - locations, departments, hours, responsibilities </li>
        </ul>
      </li>
    </ul>

    <h4>Customization Is Critical</h4>
    <p>Remember, you always want to tweak your resume when you apply for a job. No two positions are exactly alike, and each employer is going to have different standards and requirements that are very important to them. Key in on those requirements, and be sure to incorporate them into your resume. You'll know what these requirements are by reviewing the job advertisement and noting special keywords throughout; or, in most cases, the employer will state required skills or preferred qualifications. You're a perfect match when you meet all of the required and preferred qualifications.</p>

    <h4>Required And Preferred Skills Are Essential</h4>
    <p>When reviewing the description for a job opening, be careful to note exactly what the employer lists as required and preferred. This is critical information. You want to make sure your resume communicates very clearly that you possess the required skills. This means you're capable of doing the job and performing the essential functions. Preferred qualifications are the employer's wish list of things they'd like to have in a new employee. They can live without them, but if you can prove you possess them, you just upped the ante for the other candidates being considered and are one step closer to positioning yourself as the ideal candidate.</p>

    <h4>Keywords Are A MUST</h4>
    <p>Many companies are using applicant-tracking software that searches through the received resumes and pulls ones that have specific keywords that the employer is looking for. When applying for positions, make sure to scan the job description for important keywords listed throughout. Chances are, any recruiter or HR person is going to use these keywords when searching job boards for your resume. Make sure these keywords are used throughout your resume, or the software won't pull your resume in the search results.</p>
  </li>

  <li class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
    <div class="trigger underline">Resume Keywords</div>
    <div>In today's job market, your resume will probably go through at least one keyword search before it lands on an employer's desk. In order to pass that search, you need to have the right list of keywords for your resume and you need to know how and where to put those keywords on your resume.</div>
    <p>Each list of keywords is determined and entered into the engine do the resume search by the recruiter or hiring manager who's looking for a job seeker to fill a job opening. She or he makes that list based on the job requirements. Be sure to read the job listing thoroughly and customize your resume accordingly.</p>
    <h4>What are resume and cover letter keywords?</h4>
    <ul>
      <li>Keywords are buzzwords that identify a profession.</li>
      <li>Keywords are terms and phrases hiring managers supply to human resources recruiters to create job postings and find matching resumes.</li>
      <li>The keywords in a resume give important information about the job seeker.</li>
      <ul>
        <li>Technical expertise</li>
        <li>Management skills</li>
        <li>Industry know-how</li>
        <li>Your education and/or training</li>
        <li>Licenses/certifications</li>
      </ul>
    </ul>

    <h4>Why are they important to place in my resume and cover letter?</h4>
    <ul>
      <li>They can connect current resumes with current job openings.</li>
      <li>Ensure that searches for future job openings will pull appropriate resumes out of the database and put them in front of hiring professionals.</li>
      <li>Make sure you use keywords because applicant-tracking software the organization is using will not pull your resume in the search results without them.</li>
    </ul>

    <h4>Where do I find keywords that relate to my medical field?</h4>
    <ul>
      <li>Make a master list of keywords that appear in similar jobs from other job postings and bulletin boards.</li>
      <li>Search as if looking for the specific job you want without regard for geographical location, since this exercise is intended to generate keyword.</li>
      <li>Go to Websites that represent companies and associations related to the candidate's target industry in search of other buzzwords.</li>
    </ul>
  </li>
  <li class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
    <div class="trigger underline">Cover Letter Guidelines</div>
    <div>First impressions count in the job search, and that's why a dynamite cover letter can mean the difference between success and failure in your healthcare job search. But what makes a winning healthcare cover letter?</div>

    <h4>Get to the Point</h4>
    <div>State the purpose of your letter in the first paragraph. Small talk is generally a waste of space. Three paragraphs is a good length.</div>

    <h4>Tailor Your Letter to the Reader</h4>
    <div>Focus on the needs of the specific healthcare organization, not on your own requirements as a job seeker. Visit your potential employer's website and read their mission statement to learn more about the organization. Then use your cover letter to demonstrate how your skills and experience can benefit the organization.</div>

    <h4>Maintain the Right Tone</h4>
    <div>A cover letter should be businesslike, friendly and enthusiastic.Health professionals have the opportunity to reveal their passion through a cover letter, but the document shouldn't become too syrupy, or it loses its objectivity and professionalism.</div>

    <h4>Make It Memorable</h4>
    <div>New graduates can make their cover letters stand out by personalizing their stories. If you decided to model your career after an Emergency Medical Technician who helped a family member, tell that story rather than making the generic claim that you've always wanted to help people. If your story is unique, it's no longer like everyone else.</div>

    <h4>Highlight Your Biggest Successes</h4>
    <div>Your cover letter shouldn't just summarize your career or repeat the same information from your resume. You want it to highlight the successes and achievements or &quot;triples and home runs&quot; of your career that are most related to the types of positions for which you are applying.</div>

    <h4>Use Power Phrases</h4>
    <div>Use strong action words to convey your experiences and illustrate your qualifications with phrases like &quot;I have decreased costs by...&quot; or &quot;I have increased productivity by...&quot; Don't be shy about selling yourself, since that's the purpose of a cover letter.</div>

    <h4>Show Your Team Spirit</h4>
    <div>If you have room for a few extra sentences in your cover letter, emphasize your teamwork and communication skills. Today teamwork and communication are vitally important in almost every healthcare position.</div>

    <h4>Spice Up Your Writing</h4>
    <div>A poor example to begin a cover letter is &quot;I am writing in response to your advertisement for a Phlebotomy Technician and have enclosed my resume for your review.&quot; The better opener could be &quot;Your ad on Monster for a Phlebotomy Technician captured my attention and motivated me to learn more about this employment opportunity.&quot; Then describe how your qualifications match the employer's needs.</div>

    <h4>Follow Up</h4>
    <div>An unforgivable error some job seekers make is failing to follow up after sending their cover letter and resume. If the name of a hiring manager or current employee is available, follow-up, as soon as possible after submitting your application materials.</div>

    <h4>Avoid</h4>
    <ul>
      <li>Addressing a letter recipient by anything other than his name. Avoid &quot;Dear Hiring Manager&quot; at all costs.</li>
      <li>Writing a canned, generic letter that looks like it was copied from a book.</li>
      <li>Starting the first paragraph and too many other sentences with &quot;I.&quot;</li>
      <li>Making spelling errors and typos.</li>
      <li>Handwriting a cover letter.</li>
      <li>Using printer paper or paper that is different from your resume paper. Instead utilize resume paper.</li>
      <li>Including irrelevant personal information or job experience.</li>
      <li>Overstating your accomplishments or contradicting your resume.</li>
    </ul>
  </li>

  <li class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
    <div class="trigger underline">Sample Resumes</div>
    <ul>
      <li class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
      <div class="trigger">EMT</div>
        <div class="download-link"><a href="<?= $incdir ?>documents/career_services/Sample Resume - EMT.doc">Download</a></div>
      <div class="paper">
        <h2>John L. Doe</h2>
        <div class="center">7676 Fairview Dr., Berkeley, CA 94704<br>510-849-7658, johndoe@gmail.com</div>

        <h4>SUMMARY OF QUALIFICATIONS</h4>
        <hr />
        <ul>
          <li>4 years managerial experience, scheduling employees, instructing students, and collaborating with staff to lead outdoor wilderness trips</li>
          <li>5 years of customer service experience with an ability to prioritize work tasks and work well under pressure</li>
          <li>4 years of front office experience managing appointments, phone, filing, and record keeping</li>
          <li>Training in Wilderness Safety and Survival Skills</li>
        </ul>

        <h4>CERTIFICATIONS</h4>
        <hr />
        <ul>
          <li>
          <div class="right">12/2012</div>
          California State Emergency Medical Technician, EMT - B<br />
          (Certificate Number: E289758)
          </li>
          <li>
          <div class="right">1/2011</div>
          BLS - American Heart Association Certification
          </li>
          <li>
          <div class="right">1/2011</div>
          First Aid Certification
          </li>
        </ul>

        <h4>EXTERNSHIPS</h4>
        <hr />
        <div class="right">9/2012</div>
        <div class="bold">Clinical Emergency Medical Technician, 8 hours</div>
        Kaiser Permanente, Emergency Medical Department, Oakland, CA
        <ul>
          <li>Responsible for...</li>
          <li>Assisted with...</li>
        </ul>

        <div class="right">10/2012</div>
        <div class="bold">Field Emergency Medical Technician, 10 hours</div>
        Paramedics Plus, Alameda County, CA
        <ul>
          <li>Responsible for...</li>
          <li>Prepared...</li>
        </ul>

        <h4>EMPLOYMENT HISTORY</h4>
        <hr />
        <div class="right">5/2008 - Present</div>
        <div class="bold">Rock Climbing Instructor</div>
        Adventure Rock, San Francisco, CA
        <ul>
          <li>Coordinated staff schedules and weekly meetings to improve instructor coverage and front desk staffing</li>
          <li>Instructed all levels of rock climbing safety and techniques</li>
          <li>Collaborated with staff members to organize and implement rock climbing wilderness adventure trips</li>
        </ul>

        <div class="right">3/2007 - 8/2012</div>
        <div class="bold">Customer Service Representative</div>
        Honda Service Department, Oakland, CA
        <ul>
          <li>Received the award for "Going Above and Beyond"</li>
          <li>Provided exemplary customer service phone and in-person support</li>
          <li>Created procedures for streamlining the customer service process</li>
        </ul>

        <h4>EDUCATION</h4>
        <hr />
        <div class="right">6/2007</div>
        <div class="bold">University Of California Bachelor of Arts, GPA: 3.8</div>

        <h4>COMMUNITY INVOLVEMENT</h4>
        <hr />
        <div class="right">1/2013</div>
        <div class="bold">Emergency Medical Services</div>
        San Francisco Pride, San Francisco, CA

        <h5>References Available Upon Request</h5>
      </div>
      </li>

      <li class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
        <div class="trigger">Phlebotomy</div>
        <div class="download-link"><a href="<?= $incdir ?>documents/career_services/Sample Resume - Phlebotomy.doc">Download</a></div>
        <div class="paper">
        <h2>Karen L. Smith</h2>
          <div class="center">9251 Oak Drive, Berkeley, CA 94704<br>(510) 849-8792, karenlsmith@gmail.com</div>

          <h4>Objective</h4>
          <hr>
          Dynamic and highly-competent Phlebotomy Technician ready to work in professional medical environment. 

          <h4>Certifications</h4>
          <hr>
          <ul>
            <li>
            <div class="right">Expiration 12/2014</div>
            California State Certified Phlebotomy Technician, CPT-1<br />
            (Certificate Number: CPT87645)<br />
            </li>
            <li>
            <div class="right">Expiration 8/2014</div>
            BLS - American Heart Association and Basic First Aid
            </li>
          </ul>

          <h4>Externship</h4>
          <hr>
          <div class="right">12/2012</div>
          Phlebotomy - 40 hours<br />
          St. Mary's Medical Center, San Francisco, CA, Laboratory<br />
          <ul>
            <li>Performed venipuncture by using evacuated tube system and butterfly</li>
            <li>Demonstrated correct processing and accession</li>
            <li>Performed 100 successful venipunctures on patients of all age groups</li>
            <li>Demonstrated all aspects of HIPAA and patient confidentiality</li>
            <li>Used correct protocols regarding blood-borne pathogens and lab safety</li>
          </ul>

          <h4>Employment History</h4>
          <hr>
          <div class="right">3/2007 - 2/2012</div>
          Customer Service Representative<br />
          Macy's Department Store, San Francisco, CA<br />
          <ul>
            <li>Decreased the wait time for customers to receive service by 20%</li>
            <li>Trained new customer service employees on all job responsibilities</li>
            <li>Assisted with a complete store inventory</li>
          </ul>

          <div class="right">2/2003 - 3/2007</div>
          Front Office Assistant<br />
          Dr. Jack Andrews DDS, San Leandro, CA<br />
          <ul>
            <li>Reduced office supplies expenses by 20%</li>
            <li>Managed appointments, phones, and filing</li>
            <li>Assisted with patient check-in and billing</li>
          </ul>

          <h4>Education</h4>
          <hr>
          <div class="right">5/2004</div>
          Bachelor of Science, Biology<br />
          California State East Bay, Hayward, CA<br />

          <h4>Community Involvement</h4>
          <hr>
          <div class="right">4/2012 - Current</div>
          American Red Cross, Oakland, CA<br />
          Volunteer - 60 hours<br />

          <h5>References Available upon Request</h5>
        </div>
      </li>
      <li class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
        <div class="trigger">Medical Assisting</div>
        <div class="download-link"><a href="<?= $incdir ?>documents/career_services/Sample Resume - Medical Assisting.doc">Download</a></div>
        <div class="paper">
          <h2>Oscar L. Lopez</h2>
          <div class="center">7976 Fairview Drive, Berkeley, CA 94704<br>(510) 849-8792, oscarlopez@gmail.com</div>

          <h4>Objective</h4>
          <hr>
          Dynamic and highly-competent Medical Assistant ready to work in a professional medical health care environment.

          <h4>Certifications</h4>
          <hr>
          <ul>
            <li>
            <div class="right">Expiration 9/2017</div>
            California State Certified Medical Assistant, Clinical<br />
            (Certificate Number: 45362-17)
            </li>
            <li>
            <div class="right">Expiration 6/2014</div>
            California State Certified Phlebotomy Technician, CPT-1<br />
            (Certificate Number: CPT58873)
            </li>
            <li>
            <div class="right">Expiration 9/2013</div>
            BLS - American Heart Association and Basic First Aid
            </li>
          </ul>
							         				          
          <h4>Externships</h4>
          <hr>
          <div class="right">4/2012 - 5/2012</div>
          Medical Assistant - 160 hours<br />
          Kaiser Permanente Medical Center, Oakland, CA<br />
          Surgery Department and Breast Care Center<br />
          <ul>
            <li>Assisted with rooming patients and taking vital signs</li>
            <li>Assisted with scheduling appointments: Healthconnect</li>
            <li>Set up sterile and non-sterile surgical mayo trays</li>
            <li>Responsible for cleaning rooms and restocking inventory</li>
          </ul>
          <div class="right">3/2012</div>
          Phlebotomy - 40 hours<br />
          St. Mary's Medical Center, San Francisco, CA<br />
          Clinical Laboratory<br />
          <ul>
            <li>Performed venipuncture by using evacuated tube system and butterfly</li>
            <li>Performed 100 successful venipunctures on all age groups</li>
            <li>Demonstrated correct processing and accession</li>
          </ul>

          <h4>Employment</h4>
          <hr>
          <div class="right">3/2007 - 2/2012</div>
          Customer Service Representative<br />
          Macy's Department Store, San Francisco, CA<br />
          <ul>
            <li>Decreased the wait time for customers to receive service by 20%</li>
            <li>Trained new customer service employees on all job responsibilities</li>
            <li>Assisted with a complete store inventory</li>
          </ul>
          <div class="right">3/2003 - 2/2007</div>
          Front Office Assistant<br />
          Dr. Jack Andrews DDS, San Leandro, CA<br />
          <ul>
            <li>Managed appointments, phones, and filing</li>
            <li>Assisted with patient check-in and billing</li>
          </ul>

          <h4>Education</h4>
          <hr>
          <div class="right">6/2007</div>
          California State East Bay, Hayward, CA Bachelor of Arts, History
			          
          <h4>Community Involvement</h4>
          <hr>
          <div class="right">2012 - Current</div>
          American Red Cross, Oakland, CA - 60 hours<br />
          <br />
          <div class="right">6/2012</div>
          Kaiser Permanent Medical Center, Oakland, CA - 4 hours<br />
          Disaster Drill<br />

          <h5>References Available Upon Request</h5>
        </div>
      </li>
    </ul>
  </li>

  <li class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
    <div class="trigger underline">Sample Cover Letters</div>
    <ul>
      <li class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
        <div class="trigger">Referred</div>
        <div class="download-link"><a href="<?= $incdir ?>documents/career_services/Sample Cover Letter - Referred.doc">Download</a></div>
        <div class="paper">
          <p>
          [Your Name]<br />
          [Street Address]<br />
          [City, ST  ZIP Code]<br />
          [phone number]<br />
          [email]<br />
          </p>

          <p>
          [Date]
          </p>

          <p>
          [Recipient Name]<br />
          [Title]<br />
          [Company Name]<br />
          [Street Address]<br />
          [City, ST  ZIP Code]<br />
          </p>

          <p>
          Dear [Recipient Name]:
          </p>

          <p>[Name of person referring] suggested that I contact you regarding the open [job title] position with [Company Name]. My educational background in [field of study], along with my professional experience, makes me an excellent candidate for this position.</p>

          <p>As you will see from the enclosed resume, I have more than [number] years of experience in the field of [area of professional expertise]. My resume shows that I have been consistently rewarded for hard work with promotions and increased responsibilities. These rewards are a direct result of my expertise in [area of professional expertise], my commitment to personal and professional excellence, and my excellent written and oral communication skills.</p>

          <p>If you have questions, or if you want to schedule an interview, please contact me at [phone number]. I look forward to meeting you to further discuss employment opportunities with [Company Name].</p>

          <p>
          Sincerely,<br />
          [Your Name]<br />
          Enclosure<br />
          </p>
        </div>
      </li>
      <li class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
        <div class="trigger">Not Referred</div>
        <div class="download-link"><a href="<?= $incdir ?>documents/career_services/Sample Cover Letter - Not Referred.doc">Download</a></div>
        <div class="paper">
          <p>
          [Your Name]<br />
          [Street Address]<br />
          [City, ST  ZIP Code]<br />
          [phone number]<br />
          [email]<br />
          </p>

          <p>
          [Date]
          </p>

          <p>
          [Recipient Name]<br />
          [Title]<br />
          [Company Name]<br />
          [Street Address]<br />
          [City, ST  ZIP Code]<br />
          </p>

          <p>Dear [Recipient Name]: (Hiring Manager, To Whom it May Concern)</p>

          <p>I am interested in the [position available] at [company name]. My educational background in [field of study], along with my professional experience, makes me an excellent candidate for this position.</p>

          <p>As you will see from the enclosed resume, I have more than [number] years of experience in the field of [area of professional expertise]. My resume shows that I have been consistently rewarded for hard work with promotions and increased responsibilities. These rewards are a direct result of my expertise in [area of professional expertise], my commitment to personal and professional excellence, and my excellent written and oral communication skills.</p>

          <p>If you have questions, or if you want to schedule an interview, please contact me at [phone number]. I look forward to meeting you to further discuss employment opportunities with [Company Name].</p>

          <p>
          Sincerely,<br />
          [Your Name]<br />
          Enclosure<br />
          </p>
        </div>
      </li>
    </ul>
  </li>
</ul>

<hr>

<h2 class="trigger">Interview Skills</h2>
<ul>
  <li class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
    <div class="trigger underline">Interview Guidelines</div>
    <h4>Before the Interview:</h4>
    <ul>
      <li>Be certain of the date, time, address, directions, and name of the interviewer.</li>
      <li>Give yourself plenty of time to arrive 15 - 30 minutes early for the interview. Consider public transportation delays, parking, weather and traffic. Arriving late for a first interview may be your last mistake.</li>
      <li>Prepare by learning as much as you can about the organization via their website.</li>
      <li>Practice writing and verbalizing your answers to questions related to the job opening.</li>
      <li>Prepare to answer behavioral interview questions. Give specific examples of when you demonstrated particular behaviors or skills. The STAR answer technique includes stating the: Situation or Task, Action you took, and Results you achieved.</li>
    </ul>

    <h4>During the Interview:</h4>
    <ul>
      <li>Offer to shake hands at the beginning and end of the interview.  Do not sit until the interviewer offers you a chair or seats herself or himself first.</li>
      <li>Dress professionally for the interview. Conservative clothing like dark pants, a solid colored, pressed shirt and close - toed shoes, are a good choice for the health care field. Pay careful attention to grooming details including nails and hair. Jewelry should be very minimal and small. No low-cut blouses.</li>
      <li>Pay careful attention to the interviewer's questions. If clarification is needed, state what you think the interviewer asked or ask for more information before responding.</li>
      <li>Show enthusiasm, sincerity, tact and courtesy. Address the interviewer as Mr. Smith, Ms. Lopez, or Dr. Khan, unless they tell you otherwise.</li>
      <li>Salary and benefits should be left to the interviewer to bring up. Generally, the interviewer will not want to discuss salary until she has formed a favorable impression of the interviewee. It is helpful to find out what the position pays when you are researching the organization prior to your interview.</li>
      <li>Bring a pen and pocket notebook to notate information that may be given to you and to make notes to yourself after the interview for <span class="nowrap">self-improvement and follow-up.</span></li>
    </ul>

    <h4>After the Interview:</h4>
    <ul>
      <li>Send a thank you email or letter to the interviewer(s) within 24 hours.</li>
      <li>It is a good idea to obtain business cards of the interviewer, before leaving the interview.</li>
      <li>When writing the thank you letter/email, be sure to mention at least one topic discussed during the interview.</li>
    </ul>
  </li>

  <li class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
    <div class="trigger underline">Interview Tips</div>
    <h4>Be prepared:</h4>
    <ul>
      <li>Write out your possible answers to questions you may be asked and practice saying them.</li>
      <ul>
        <li>Practice by speaking to yourself in a mirror</li>
        <li>Video yourself</li>
        <li>Practice with other people</li>
      </ul>
      <li>Be sure to read the entire job description, requirements, and application process</li>
      <li>Do your research and look into the company you are applying for.</li>
      <li>Some companies may require a cover letter to be submitted with the application, so be sure to have one ready.</li>
      <li>Resume:</li>
      <ul>
        <li>The resume should be one page, but make sure the font size is not too small</li>
        <li>Try to include verbiage from the job listing regarding job requirements</li>
        <li>Have someone look over your resume to see if they have any suggestions about wording or format</li>
        <li>Be sure to use spell check</li>
        <li>Make sure you have the correct company listed in your resume and cover letter</li>
        <li>Make sure to have at least 3 copies of your resume prior to the day of your interview.</li>
      </ul>
      <li>Consider purchasing a portfolio binder to hold the resumes and note pad.</li>
      <li>If you list references, be sure that your references know that you have listed them and also advise them of what job/company you applied for.</li>
      <li>Get an inside perspective by speaking to anyone you know who works at the company you are apply for or another similar company</li>
      <li>Company contact information: Keep a copy of the company address, contact person, and the contact person's phone number and email address.</li>
      <li>Make sure you know how to get to the interview location.</li>
      <li>If you are driving, make sure you have enough gas. Be sure to do this the day before your interview.</li>
      <li>If you are taking public transportation, check the schedule and take an early bus/train.</li>
      <li>Leave early in case there is traffic. DON'T BE LATE.</li>
      <li>If for someone reason you are going to be late, be sure to contact the company to advise them that you will be late and when you expect to be there.</li>
      <li>Consider bringing a black or blue pen and something to write on in case you want to take notes.</li>
      <li>Keep track of your EMS certifications and make sure they are not expired.</li>
      <li>Bring your EMS certifications and a picture ID.</li>
    </ul>

    <h4>Look professional for the interview:</h4>
    <ul>
      <li>No jeans, shorts, t-shirts, hats, or sneakers. Wear business attire.</li>
      <li>Make sure your clothes are clean and pressed and your shoes are shined. Do not wait until the day of your interview to do this.</li>
      <li>Although piercings may be allowed, you may want to consider removing some or all of your visible piercings.</li>
      <li>Shave or make sure your facial hair is trimmed.</li>
      <li>Trim your nails.</li>
      <li>Brush your teeth</li>
      <li>No wild hair colors or hair styles.</li>
      <li>Do not wear perfume/cologne in case someone is allergic to it.</li>
      <li>No excessive jewelry.</li>
      <li>No excessive makeup.</li>
    </ul>

    <h4>During the interview:</h4>
    <ul>
      <li>Do not use slang or curse words.</li>
      <li>Do not chew gum.</li>
      <li>Be aware of any nervous habits you may have such as tapping a pen or shaking your leg.</li>
      <li>Use examples when appropriate and be specific.</li>
      <li>Look the person/s in the eye.</li>
      <li>When meeting someone new, give them a firm handshake and introduce yourself.</li>
      <li>Note the names of the person/s conducting the interview and occasionally use their name.</li>
      <li>Don't be a robot. Smile when appropriate.</li>
      <li>Always have an opening (&quot;Tell us about yourself&quot;) and closing statement (&quot;Is there anything else you would like to add&quot;) prepared that will summarize your qualifications and why they should hire you.</li>
      <li>If not provided, ask what the next steps are and when they should be contacting you.</li>
      <li>If you have not heard back from the company by the date they advised that they would contact you by, follow up by calling or sending an email to the appropriate person.</li>
    </ul>
  </li>

  <li class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
    <div class="trigger underline">Sample Interview Questions</div>
    <h4>Personal Questions:</h4>
    <ul>
      <li>Tell us about yourself?</li>
      <li>What have you done to prepare for the position?</li>
      <li>Why do you want to be an EMT?</li>
      <li>If hired, what contribution will you make to company?</li>
      <li>How do you plan to cope with the stress of the job?</li>
      <li>Describe for us your 3 most important personal character traits.</li>
      <li>How would your friends describe your character?</li>
      <li>What is your greatest strength? Weakness?</li>
      <li>Describe a difficult decision you have made in your life.</li>
      <li>Where do you envision yourself 1 year from now? 5 years?</li>
      <li>What is your proudest/greatest achievement?</li>
      <li>Name a time where you were stressed and how you handled it.</li>
      <li>What is the hardest thing you have ever done?</li>
      <li>Why would we select you over the other candidates?</li>
      <li>How do you handle conflict?</li>
      <li>What word would best describe you in a positive way? A negative way?</li>
      <li>Why do you want to work for our company?</li>
      <li>What do you say when you don't know an answer to a question?</li>
      <li>Do you have any questions for us?</li>
      <li>Do you have anything to add?</li>
    </ul>

    <h4>Work History:</h4>
    <ul>
      <li>Give an example of a time when you worked with someone who came from a background different from you?</li>
      <li>Do you have an example of a situation when you have followed strict rules to complete a task</li>
      <li>Give an example of a mistake you made. What did you learn from that mistake?</li>
      <li>What would your employer say about you?</li>
      <li>Give some examples of customer service that you provide in your current/past employment?</li>
      <li>Give an example of a time you worked on something that was innovative and explain your role.</li>
      <li>Tell me about a time when you had to work with a person that you did not like?</li>
      <li>Give an example of a goal you set for yourself and how you reached it.</li>
      <li>Give an example of a time you had to play a leadership role.</li>
      <li>Give an example of a difficult decision you had to make and how you came to make that decision.</li>
    </ul>

    <h4>Course Specific:</h4>
    <ul>
      <li class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
        <div class="trigger">EMT</div>
        <ul>
          <li>General EMT:
            <ul>
              <li>What does customer service as an EMT mean to you?</li>
              <li>Describe the job of an EMT?</li>
              <li>What is the most appealing aspect of being an EMT?</li>
              <li>What is the least appealing aspect of being an EMT?</li>
              <li>Why is teamwork so important in EMS and what are the advantages and disadvantages of working as a team?</li>
              <li>What kind of problems might arise as an EMT and what might you do to prevent or minimize such problems?</li>
              <li>Define honesty and integrity. What do they mean to EMTs?</li>
              <li>What are your qualifications for the job?</li>
              <li>What kinds of stress are EMTs subjected to?</li>
              <li>Why is safety such an important component of EMS?</li>
            </ul>
          </li>

          <li>Situational:
            <ul>
              <li>Have you ever been in an emergency situation? Tell us what you did?</li>
              <li>You bring in a patient to the ER who has a 1/2 inch minor laceration on their forehead. The RN you are transferring the patient to is upset and says that this is a minor issue, why are you bringing patients like this to the ER? How do you respond and handle this situation?</li>
              <li>You are a new employee and you are partnered with a senior EMT. The senior EMT advises you to do something that is different than what you were taught in your new hire training. What do you do? </li>
              <li>Your partner comes into work and advises you that he was drinking all night. You can still smell alcohol on him and he still appears to be intoxicated. What do you do?</li>
              <li>Give us a time you had to work part of a team and what was your role?</li>
            </ul>
          </li>

          <li>Scope of Practice:
            <ul>
              <li>What do you do if you suspect a patient is experiencing a CVA?</li>
              <li>If a Paramedic advises you to administer a medication to a patient, can you administer it to the patient?</li>
              <li>Is it within the scope of practice for an EMT to transport a patient with an IV that is connected to medication?</li>
              <li>What do you do if a patient is pulseless and apneic and the patient's family member says that the patient is a DNR, but they do not have a copy of it?</li>
              <li>How do you make sure you are up to date regarding local/State protocols?</li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </li>

  <li class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
    <div class="trigger underline">Sample Thank You Letter</div>
    <div class="download-link"><a href="<?= $incdir ?>documents/career_services/Sample Thank You Letter.doc">Download</a></div>
    <div class="paper">
      <div>
      To:  Joan.smith@company.com<br>
      Subject: Thank You - Position<br>
      </div>

      <p>Dear Ms. Smith,</p>

      <p>It was a pleasure speaking with you today about the position at Smith Agency.</p>

      <p>The job seems to be an excellent match for my skills and interests. In addition to my enthusiasm, I will bring to the position proficiency, assertiveness, and the ability to encourage others to work cooperatively within the department.</p>

      <p>I appreciate the time you took to interview me. I especially liked the career advancement opportunities that we discussed. I am very interested in working for you and look forward to hearing from you regarding this position.</p>

      <p>Sincerely,</p>

      <p>
      Mike Springer CCMA - C<br />
      mikespringer@gmail.com<br />
      (555) 555-5555<br />
      LinkedIn: linkedin.com/in/mikespringer<br />
      </p>
    </div>
  </li>

  <li class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start video-link" data-for="#sample_interview_video">
    <div class="trigger underline">Sample Interview Video</div>
    <?php include_once($incdir . 'include/videos.php'); ?>
    <div id="sample_interview_video" data-number="<?= $videos['Sample Interview']['number'] ?>" data-loaded="false"></div>
  </li>
</ul>
HTML;

print $renderer->render('images_right.twig', array(
  'title' => 'Fast Response Student Resources', 
  'page_header' => 'Student Career Services',
  'description' => "Fast Response offers the Bay Area's most comprehensive education and resources for healthcare professionals including entry-level courses, certifications, and continuing education units.",
  'keywords' => 'fast response, fast, response, health care, healthcare, school, education, training, certification, emt, emergency medical technician, medical assistant, phlebotomy, phlebotomist, pharmacy tech, pharmacy technician, paramedic, continuing education, cpr, bls, basic life support, acls, advanced life support, ecg, ekg',
  'canonical' => 'http://www.fastresponse.org/',
  'css' => array('students.css'),
  'active' => 'students',
  'content' => $content,
  'right_images' => array('/img/interview.jpg', '/img/tmp.png', '/img/tmp.png'),
));
?>
