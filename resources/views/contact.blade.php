@extends('layouts.app')

@section('content')

<div id="section1" class="container bg-secondary text-white text-center" style="padding:100px;">
  <h1>Bioxy Contact</h1>
  <br>
  <p class= "alert alert-dark">You can contact us if there's problems that you can't solve with yourself and here's our customer service that will help you to solve your problems!</p>
  <h3>(0541)-742231</h3>
</div>

<br><br>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h2>Public Relation Profile</h2>
      <br>
        <div class="card container bioxydiv" style="width:400px">
          <img class="card-img-top" src="/img/sohyun.jpg" alt="Card image" height="400px" width="200px">
        <div class="card-body">
          <h4 class="card-title h-con">Kim So-hyun</h4>
          <p class="card-text p-con">Kim So-hyun is an PR and Creative-team in K-Market.</p>
        </div>
      </div>

      <br><br><br><br>

      <h2>Public Relation Profile</h2>
      <br>
        <div class="card container bioxydiv" style="width:400px">
          <img class="card-img-top" src="/img/newton.jpg" alt="Card image" height="400px" width="200px">
        <div class="card-body">
          <h4 class="card-title h-con">Kathryn Newton</h4>
          <p class="card-text p-con">Kathryn Newton with her high intellegence will solve your problems.</p>
        </div>
      </div>
      <hr class="d-sm-none">
    </div>

    <br><br>

    <div class="col-sm-8">
      <br><br>
      
      <h2>Curriculum Vitae</h2>
      <h5>Skills</h5>
      <p class="p-con">Strong written and oral communications skills to write and edit content, pitch and deliver promotional offers, and collaborate with media for positive publicity. -Creative self-starter who can take information and transform it into something unique, authentic, and memorable. 
        -Skilled at using technology and social media to increase sales and build brand awareness, and educate customers about product offerings. -Proven organization and time management skills and an understanding of effective financial practices to guarantee that all campaigns are delivered on time and within budget.
        -Innovative problem-solver who can find solutions to unexpected crises, which positions the company as a responsible leader that is committed to full disclosure and trustworthiness.</p>
      <h5>Professional Summary</h5>
      <p class="p-con">Skilled public relation professional with nearly 15 years of experience in fostering positive relationships between organizations and media. Strong communication skills and confident presentation abilities to deliver promotional campaigns, media addresses, and reports to executive management. 
        Profound understanding of the importance of good publicity, reputation management, and timely response to PR inquiries in the development and success of an organization. Expert writing abilities with thorough attention to detail, proper formatting and citation, and concise delivery of interesting facts. 
        Committed to providing organizations with positive interactions with the media to maintain reputation, strengthen consumer loyalty, and establish credibility. Also don't forget to start your hobby and don't listen to other voice. Bealive in yourself and dont forget to pray whenever you are because god
        always bless all of us.
      </p>

      <br><br><br><br><br>

      <h2 class="mt-5">Curriculum Vitae</h2>
      <h5>Work Experience</h5>
      <p class="p-con">-Facilitate inquiries and requests from media outlets, verify legitimacy of sources, and collaborate with colleagues on content development.</p>
      <p class="p-con">-Write information-rich content to pitch to the public in promotional offers and campaigns by interviewing shareholders, community members, and product consumers.</p>
      <p class="p-con">-Create factually correct and professionally written responses to crisis situations to uphold organizational integrity and maintain character and reputation.</p>
      <p class="p-con">-Manage the expenditures of the communications department and ensure that all campaigns stay within budget.</p>

      <h5>Public Relation Intern</h5>
      <p class="p-con">-Utilized social media outlets to increase customer followers by posting relevant messages, interesting product facts, and blurbs about upcoming developments and promotions.</p>
      <p class="p-con">-Researched and collected data for use in press releases about a new product line released during 2001.</p>
      <p class="p-con">-Presented four different promotional campaigns and met the deadlines and budget requirements for each one.</p>
    </div>
  </div>
</div>

<br><br><br>

<div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="panel panel-dark panel-colorful">
        		<div class="panel-body text-center">
        			<p class="text-uppercase mar-btm text-sm">Story</p>
              <h3>Bioxy Short Story</h3>
              <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
                Open Story
              </button>
        			<hr>
        			<small><span class="text-semibold"><i class="fa fa-dollar fa-fw"></i></span> Short story about how we can build Bioxy</small>
        		</div>
        	</div>
        </div>        
	</div>
</div>

<div class="offcanvas offcanvas-start" id="demo">
    <div class="offcanvas-header">
      <h2 class="offcanvas-title">Bioxy's Story</h2>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <p class="colorp">Bioxy adalah aplikasi yang bertujuan untuk mempelajari lebih banyak hal dari biologi terutama biologi kelas 11. Aplikasi ini dapat membantu anda dengan memberikan banyak pertanyaan dari tingkat kesulitan yang berbeda-beda dan dari soal tersebut anda akan mempelajari kesalahan maupun mempelajari soal-soal baru yang ada.</p>
    </div>
  </div>

@endsection