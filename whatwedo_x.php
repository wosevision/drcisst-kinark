<?php require_once( 'header.php' ); ?>

<cms:template title='What We Do' >
    <cms:editable name='header_image' label='Header Image' desc='Upload filesize limit 2MB' height='300' crop='1' type='image' show_preview='1' preview_width='150' />
</cms:template>
        
    <!-- container -->
        <div class="container">
            <section class="row">
                
                <article class="col-xs-12 fixpad">
                    <div class="inside-img">
                    	<img src="<cms:show header_image />" alt="What We Do">
                    </div>
                </article>
                     
            </section>

            <section class="row">
                <article class="col-lg-3 col-md-4 col-sm-12 fixpad">
                    <div class="featvids">
                        Mew
                    </div>
                </article>

                <article class="col-lg-9 col-md-8 col-sm-12 fixpad">
                    <div class="news">
                    <h2>What We Do</h2>
                    <cms:editable name='whatwedo_article' label='Article'
                                            desc='Enter contents of What We Do article'
                                            toolbar='custom'
                                            custom_toolbar='bold, italic, underline |
                                            justifyleft, justifycenter, justifyright |
                                            numberedlist, bulletedlist |
                                            undo, redo |
                                            |
                                            cut, copy, paste, pastetext |
                                            link, unlink |
                                            source, blockquote'
                                            type='richtext'>
						<p>The Durham Region Critical Incident Stress Support Team is a voluntary, free-standing organization consisting of your peers and mental health professionals; supported by police, fire, emergency medical services administrations and associations across Durham Region. Members are trained to provide a variety of crisis intervention services (individual, group) and pre-incident education to emergency personnel and their families. Training adheres to internationally recognized standards.</p>
						<p>DRCISST is linked locally, provincially, nationally, and internationally - Ontario CISM Advisory Council, Canadian Critical Incident Stress Foundation; International Critical Incident Stress Foundation, ICISF Team Hotline Register.</p>

						<h4>WHO IT IS</h4>
						<p>Emergency service workers exposed to:</p>
						<ul><li>Line of duty death</li>
						<li>Serious injury or death of a child</li>
						<li>Mass casualty incidents</li>
						<li>Suicides</li>
						<li>Prolonged or high powered events</li>
						<li>Natural disasters</li>
						<li>Working in dangerous situations</li>
						<li>The ‘shouldn’t have happened’ calls</li>
						<li>Death of a civilian resulting from emergency service operations</li>
						<li>Incidents with unusual sights, sounds or odours </li>
						<li>And many others...</li></ul>

						<!-- <h4>WHAT IT IS</h4> -->
						<q>A critical incident is any situation faced by emergency services personnel that causes them to experience unusually strong emotional and/or physical reactions which have to potential to interfere with their ability to function either at the scene or later.</q>
						<p class="quoteName">–J. Mitchell PhD.</p>

						<h4>WHEN IT HAPPENS</h4>
						<p>CIS Reactions/Symptoms</p>
						<ul><li>Irritability/anger/guilt</li>
						<li>Difficulty sleeping/nightmares</li>
						<li>Second guessing decisions</li>
						<li>Intestinal upsets/headaches</li>
						<li>Withdrawal/fears/depression</li>
						<li>Flashbacks/lossof concentration</li>
						<li>Decreased of problem solving abilities </li>
						<li>Anxiety about similar stressful events </li>
						<li>Increased use of alcohol/drugs</li>
						<li>And others...</li></ul>
						<p>These are NORMAL reactions by NORMAL people to highly stressful events. These symptoms may also indicate an emergency service worker is suffering from critical incident stress and benefit from further help.</p>

						<h4>WHERE WE HELP</h4>
						<p>A well established team of emergency service workers volunteering, to provide their peers the tools to alleviate potential stress related symptoms, through peer support, debriefing and educative processes.</p>
						<p>Team members are trained through an internationally recognized organization dedicated to the support of emergency service workers.</p>
						<p>The DRCISS Team provided over 4000 interventions in 16 years of operation with: colleagues in Durham; peers in adjacent counties; emergency personnel and municipal neighbours at the Ice Storm; peers working at Swissair 111 disaster and the aftermath of 9/11 at the W.T.C.</p>
						<p>As emergency service workers we know that we are exposed to 4000 times the potential critical incidents as our civilian colleagues and all of the life, cumulative, organizational and "regular" stress too!.. We want to learn how to manage our stress and our health better - and help you and your family do the same.</p>
						<p>This is the belief and the commitment under our motto, Helping the Helpers.</p>

						<div class="text-img"><img src="" alt="alt me!"></div>

						<h4>HOW TO REACH US</h4>
						<p>The DRCISS Team may be contacted by any emergency service worker or service.</p>
						<p>A representative of an agency requiring information or assistance may contact the Team by calling our help line at LHC Oshawa 905- 576-8711 ext 3200, ask for the DURHAM REGION CRITICAL INCIDENT STRESS SUPPORT TEAM. You will then be asked FOR the following information:</p>
						<ol><li>Your name and telephone number.</li>
						<li>The agency, address and phone number.</li>
						<li>Nature of incident or information needed.</li></ol>
						<p>The Team Coordinator who is on call, will then be advised. If it is an emergency you will be contacted promptly.</p>

						<h4>WHAT YOU CAN DO</h4>
						<p>With your assistance and input, we endeavour to educate emergency service workers about daily and/or critical stress.</p>
						<p>Join the team - we are always looking for new members. If you have some time to spare and want to assist your colleagues, contact the:</p>
						<p><b>DURHAM REGION CRITICAL INCIDENT STRESS SUPPORT TEAM:</b>
						<br>905-576-8711 ext 3200</p>
						<p>The process is NOT therapy.</p>
						
					</cms:editable>
                    </div>
                </article>
            </section>
            
        </div>
    <!-- /container --> 

<?php require_once( 'footer.php' ); ?>