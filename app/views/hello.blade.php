@extends('layouts.master')

@section('title')
@parent
Home
@stop

@section('styles')
@stop

@section('sidebar')
@stop

@section('content')
<section class="first" id="home">
    <div class="fadeIn animated" id="abs-cen">
        <div class="main-msg">
            <h1 class="bounceIn animated">Imran Ismail</h1>
            <p class="bounceIn animated">Freelance Web Developer</p>
            
            <label class="btn" for="toggle-1">LEARN MORE</label>
        </div>
    </div> 
</section>

<section class="second" id="education">
    <article>
        <h5>Education</h5>
        <ul>
            <li>
                <p>SMK SERI HARTAMAS</p>
                <small>GCE/O' Levels Equivalent in Art Stream</small>
            </li>
            <li>
                <p>University of Kuala Lumpur</p>
                <small>Diploma of Engineering Technology in Computing</small>
            </li>
            <li>
                <p>University of Kuala Lumpur</p>
                <small>Bachelor of Engineering Technology in Software Engineering</small>
            </li>
        </ul>
         
    </article>
</section>

<section class="third" id="work">
    <article>
        <h5>Recent Work</h5>
        
        <ul>
            <li>
                <p>e-library</p>
                <small>Online web application to manage e-books. <a href="http://meepwn.com/elibrary" style="color:white" target="_blank">Link</a></small>
            </li>
            <li>
                <p>Taskr</p>
                <small>A task management web app. <a href="http://meepwn.com/taskr" style="color:white" target="_blank">Link</a></small>
            </li>
            <li>
                <p>KidzSurgeon</p>
                <small>Professional career profile. <a href="http://kidzsurgeon.com" style="color:white" target="_blank">Link</a></small>
            </li>
            <li>
                <p>Zarlith Events</p>
                <small>Company profile with content management system. </small><a href="http://meepwn.com/zarlithevents" style="color:white" target="_blank">Link</a></small>
            </li>
        </ul>

    </article>
</section>
@stop
