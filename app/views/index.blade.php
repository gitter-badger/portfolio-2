@extends('layouts.master')

@section('title')
@parent
@stop

@section('styles')
@stop

@section('sidebar')
@stop

@section('content')
<section id="home">
    <div id="abs-cen">
        <div class="main-msg">
            <h1>Imran Ismail</h1>
            <span>Freelance Web Developer</span>
            
            <label class="btn" for="toggle-slider">LEARN MORE</label>
        </div>
    </div> 
</section>

<section class="tint-blk" id="education">
    <article>
        <h5>Education</h5>
        <ul>
            <li>
                <p>SMK Seri Hartamas</p>
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

<section class="tint-wht" id="community">
    <article>
        <h5>Community</h5>
        
        <strong>President &amp; Founder of UniKL Gamer's Hideout</strong>
        <p>Besides doing freelance web development, he is also the founder of UniKL Gamer's Hideout club under UniKL MIIT. Founded in 2013 this club exist to create a platform for gamers alike in UniKL irregardless of courses could meet up and share the same hobby and passion that they have for the gaming scene.</p>
    </article>
</section>

<section class="tint-blu" id="work">
    <article>
        <h5>Recent Work</h5>
        
        <ul>
            <li>
                <p>E-library</p>
                <small>Online web application to manage e-books. <a href="http://meepwn.com/elibrary" style="color:white" target="_blank">Link</a></small>
            </li>
            <li>
                <p>KidzSurgeon</p>
                <small>Professional career profile. <a href="http://kidzsurgeon.com" style="color:white" target="_blank">Link</a></small>
            </li>
            <li>
                <p>Taskr</p>
                <small>A task management web app. <a href="http://meepwn.com/taskr" style="color:white" target="_blank">Link</a></small>
            </li>
            <li>
                <p>Zarlith Events</p>
                <small>Company profile with content management system. <a href="http://meepwn.com/zarlithevents" style="color:white" target="_blank">Link</a></small>
            </li>
        </ul>

    </article>
</section>
@stop
