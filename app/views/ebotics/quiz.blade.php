@extends('master')
@section('content')
<div id="wrapper">
<br>
    @if(Auth::check())
   <!-- <div class="pull-right btn-group">
      <a href="{{route('posts.create')}}" class="btn btn-default">Create Blog</a>-->
     <div class="pull-right btn-group">
     <a href="/todos" class="btn btn-primary" style="background:#ff7400;">Robotics</a> 
      <a href="quiz/index" class="btn btn-primary" style="background:#ff7400;">Entreprenuership</a> 
      <a href="/logout" class="btn btn-primary" style="background:#ff7400;">Logout</a>   
    </div>
 <!--   @else
    <div class="pull-right btn-group">
      <a href="/login" class="btn btn-primary">Login</a>
    </div>
    @endif-->
    <h2 style="color:#000;" align="centre">LETS GET STARTED</h2>
    
  </div>
  <div class="module-search module">
    <h2 class="module-header"></h2>
    <div class="module-content" >
        <form id="search-blog" method="get"
          action="http://www.robotbooks.com/search">
            <input type="search" name="filter.q" results="5" value="" />
            <input type="submit" value="Search" />
        </form>
    </div>
<br><br>


<div class="class">
  <div class="chapter">
      
      <h3 tabindex="-1" aria-selected="false" aria-controls="ui-accordion-accordion-panel-0" id="ui-accordion-accordion-header-0" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" aria-label="Week 1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
        <a href="#">Robotics Level&nbsp;1</a>
      </h3>

    <ul aria-hidden="true" aria-expanded="false" role="tabpanel" aria-labelledby="ui-accordion-accordion-header-0" id="ui-accordion-accordion-panel-0" style="display: none;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
          <li class=" ">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/z54/z1/">
              <p>Introduction </p>
              
              <p class="subtitle"></p>
            </a>
          </li>
          
          </li>
          <li class=" graded">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/z54/z21/">
              <p>Code Writing Exercises </p>
              
              <p class="subtitle">Exercises</p>
            </a>
          </li>
          
    </ul>
  </div>
    
  <div class="chapter">
      
      <h3 tabindex="-1" aria-selected="false" aria-controls="ui-accordion-accordion-panel-0" id="ui-accordion-accordion-header-0" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" aria-label="Week 1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
        <a href="#">Robotics Level&nbsp;1</a>
      </h3>

    <ul aria-hidden="true" aria-expanded="false" role="tabpanel" aria-labelledby="ui-accordion-accordion-header-0" id="ui-accordion-accordion-panel-0" style="display: none;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
          <li class=" ">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/z54/z1/">
              <p>Introduction </p>
              
              <p class="subtitle"></p>
            </a>
          </li>
          
          </li>
          <li class=" graded">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/z54/z21/">
              <p>Code Writing Exercises </p>
              
              <p class="subtitle">Exercises</p>
            </a>
          </li>
          
    </ul>
  </div>
  <div class="chapter">
      
      <h3 tabindex="-1" aria-selected="false" aria-controls="ui-accordion-accordion-panel-0" id="ui-accordion-accordion-header-0" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" aria-label="Week 1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
        <a href="#">Robotics Level&nbsp;1</a>
      </h3>

    <ul aria-hidden="true" aria-expanded="false" role="tabpanel" aria-labelledby="ui-accordion-accordion-header-0" id="ui-accordion-accordion-panel-0" style="display: none;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
          <li class=" ">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/z54/z1/">
              <p>Introduction </p>
              
              <p class="subtitle"></p>
            </a>
          </li>
          
          </li>
          <li class=" graded">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/z54/z21/">
              <p>Code Writing Exercises </p>
              
              <p class="subtitle">Exercises</p>
            </a>
          </li>
          
    </ul>
  </div>
    
  <div class="chapter">
      
      <h3 tabindex="-1" aria-selected="false" aria-controls="ui-accordion-accordion-panel-0" id="ui-accordion-accordion-header-0" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" aria-label="Week 1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
        <a href="#">Robotics Level&nbsp;1</a>
      </h3>

  </div>
  </div>
  <div class="id">
    <!--start of videos section-->
  <section id="pics">
   <a href="/quiz">Watch a Video</a>
    
   <iframe width="560" height="315" src="//www.youtube.com/embed/8KLwama1Gr4" frameborder="0" allowfullscreen></iframe>
    <iframe width="800" height="400" src="//www.youtube.com/embed/X3PvFqkRlvQ" frameborder="0" allowfullscreen></iframe>
  </section>
  <!--end of videos section-->
  </div>


  <div class="clas">
  <div class="chapter">
      
      <h3 tabindex="-1" aria-selected="false" aria-controls="ui-accordion-accordion-panel-0" id="ui-accordion-accordion-header-0" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" aria-label="Week 1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
        <a href="#">Robotics Level&nbsp;1</a>
      </h3>

    <ul aria-hidden="true" aria-expanded="false" role="tabpanel" aria-labelledby="ui-accordion-accordion-header-0" id="ui-accordion-accordion-panel-0" style="display: none;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
          <li class=" ">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/z54/z1/">
              <p>Introduction </p>
              
              <p class="subtitle"></p>
            </a>
          </li>
          
          </li>
          <li class=" graded">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/z54/z21/">
              <p>Code Writing Exercises </p>
              
              <p class="subtitle">Exercises</p>
            </a>
          </li>
          
    </ul>
  </div>
    
  <div class="chapter">
      
      <h3 tabindex="-1" aria-selected="false" aria-controls="ui-accordion-accordion-panel-0" id="ui-accordion-accordion-header-0" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" aria-label="Week 1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
        <a href="#">Robotics Level&nbsp;1</a>
      </h3>

    <ul aria-hidden="true" aria-expanded="false" role="tabpanel" aria-labelledby="ui-accordion-accordion-header-0" id="ui-accordion-accordion-panel-0" style="display: none;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
          <li class=" ">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/z54/z1/">
              <p>Introduction </p>
              
              <p class="subtitle"></p>
            </a>
          </li>
          
          </li>
          <li class=" graded">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/z54/z21/">
              <p>Code Writing Exercises </p>
              
              <p class="subtitle">Exercises</p>
            </a>
          </li>
          
    </ul>
  </div>
  <div class="chapter">
      
      <h3 tabindex="-1" aria-selected="false" aria-controls="ui-accordion-accordion-panel-0" id="ui-accordion-accordion-header-0" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" aria-label="Week 1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
        <a href="#">Follow the steps&nbsp;1</a>
      </h3>

    <ul aria-hidden="true" aria-expanded="false" role="tabpanel" aria-labelledby="ui-accordion-accordion-header-0" id="ui-accordion-accordion-panel-0" style="display: none;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
          <li class=" ">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/z54/z1/">
              <p>Introduction </p>
              
              <p class="subtitle"></p>
            </a>
          </li>
          
          </li>
          <li class=" graded">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/z54/z21/">
              <p>Code Writing Exercises </p>
              
              <p class="subtitle">Exercises</p>
            </a>
          </li>
          
    </ul>
  </div>
    
  <div class="chapter">
      
      <h3 tabindex="-1" aria-selected="false" aria-controls="ui-accordion-accordion-panel-0" id="ui-accordion-accordion-header-0" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" aria-label="Week 1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
        <a href="#">Robotics Level&nbsp;1</a>
      </h3>

  </div>
  </div>
  </div>
@stop
