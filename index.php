<?php
session_start();
if($_SESSION["user"]=="admin")
{
        
        require_once 'section/header.php'
        ?>
        <h2>IT Resources PVT (LTD)</h2>
        <p>
            IT Resources is one of the top Government Registered IT Company. We believe that technology plays vital role for growing people and businesses. That’s why we always try to help people in achieving their objectives by using best technologies and solutions.</p>


        <p> According to the December 2019 regulations FBR has entered into a deal with the chain store retailers to install sales software to their large or small enterprises to generate a real-time invoicing system for documentation of sales being made by them across Pakistan,
            IT Resources all software’s are integrated with FBR and trusted vendors of FBR, for more details visit FBR vendor list.

            FBR Retail Management System is planned extraordinarily for all level 1 retailers. It let you track utilization, screen changes in unit Rupee costs, ascertain when you want to reorder, and examine stock levels on a thing by-thing premise. Websol FBR POS programming records every deal when it works out, so your stock records are forward-thinking 100% of the time. With it ongoing (on-request) charge coordination module, it naturally send charge detail to Federal Board of Revenue (FBR), Sindh Revenue Board (SRB), Punjab Revenue Authority (PRA), Khyber Pakhtunkhwa Revenue Authority (KPRA) and Baluchistan Revenue Authority (BRA). </p>

        <div class="line"></div>

        <h2>Customer Support 24/7</h2>
        <p>
            IT Resources Support services are available 24 hours a day, 7 days a week, 365 days a year. We know the importance of happy customers, and nothing makes customers happier than knowing your business will be available around the clock to address any questions or concerns. </p>

        <div class="line"></div>

        <h3>Our Mission And Vision</h3>
        <p>
            Our vision is to help organizations in successful and qualitative representation of their businesses on web by truly understanding their needs followed by customized solutions for them.
            Our main aim is to deliver highly quality product and to maintain long lasting relationship with our clients.</p>
        <?php require_once 'section/footer.php';
        
}
else
{?>
    <script>
window.location.assign("./login.php");
    </script>
<?php 
}    
?> 