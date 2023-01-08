<?php

session_start();
if($_SESSION["user"]=="admin")
{
require_once 'section/header.php';
?>

     <h2>Who We Are?</h2>
     <p>IT Resources is a team of experienced professionals providing a wide range of complex software and web application development services. We have already created thousand websites and complex software since 2014 and more than thousand happy clients. IT Resources, is an IT services provider company which has skills and expertise to facilitate complex business solutions.</p>
<p> We offer services of entire software, web development, Content Management Solutions and Creative Design from the very beginning until the end. Our overall process includes concept, design, development, incorporation, and implementation.We have a squad of experts, who are working on modern technologies and tools.</p>
<div class="line"></div>

<h2>Our Mission And Vision</h2>
<p>Our vision is to help organizations in successful and qualitative representation of their businesses on web by truly understanding their needs followed by customized solutions for them.</p>
<p>Our main aim is to deliver highly quality product and to maintain long lasting relationship with our clients.</p>

<?php
require_once 'section/footer.php';

}
else
{?>
    <script>
window.location.assign("./login.php");
    </script>
<?php
}    
?>