<html>
<head>
    <title>Alexis Segurel Online CV</title>
    <link rel="stylesheet" type="text/css" href="styles.css"/>
    <meta charset="UTF-8"/>
    <link rel="javascript" type="text/javascript" href="script.js"/>
    <script>
        setInterval(function () {
            stringRandomColor = 'rgb('+Math.random() * 255 + ',' + Math.random() * 255 + ',' + Math.random() * 255 + ')';
            document.querySelector('.rainbow').style.color = stringRandomColor;
            document.querySelector('.rainbow').style.textShadow = '2px 2px 2px ' + stringRandomColor;
            document.querySelector('.rainbow').style.fontSize = Math.random() * 100 + 'px';
            document.querySelector('.rainbow').style.textAlign = 'center';
        }, 1000);
    </script>

    <?php
      $server_name = "localhost";
      $user_name = "root";
      $password = "Please don't look at my password lol";
      $database = "cvwebpage";
      $conn = mysqli_connect($server_name, $user_name, $password, $database);
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error()); 
      }
      echo "connected successfully";

      $sql_read = "SELECT visit_count FROM counter";
      $result = mysqli_query($conn, $sql_read);
      $row = mysqli_fetch_assoc($result);
      $visitor_count = $row['visit_count']; 
      $visitor_count++;
      $sql_update = "UPDATE counter SET visit_count = $visitor_count";
      $result = mysqli_query($conn, $sql_update);
      mysqli_close($conn);
     ?>

</head>


<body>
    <div class ="one">
        <h1>Welcome to my Online CV</h1>
    </div>
        <p>
        Engineering Master’s Degree | Data engineering & AI | Centrale Lille <br>
        Cybersecurity Level 6 Degree (BAC +4) | Secured System Administrator Certification RNCP37680 | Jedha<br>
        Today's date is : <?php echo date('l jS \of F Y h:i:s A');?> and this online cv has been visited <?php echo $visitor_count; ?> times !
        </p>
        <p class = "link">
        <a  href="https://github.com/BuffetLac61">Github</a>
        <a  href="www.linkedin.com/in/alexis-segurel-848b91197">Linkedin</a>
        
        </p>
    <div class='three'>
        <h1>Education</h1>
    </div>
        <p class="important_text">2025 - Today</p>
        <p>4 months course to obtain Level 6 Certification at Jedha IT school, Paris, Specialized in cybersecurity and Syst
        Admin.<br>
        Multiple Hackathon in Web and Wifi Pentest, Linux and Windows kernel exploitation for escalation of privilege.
        </p>

        <p class="important_text">2020 - 2025</p>

        <p>Engineering Master at Centrale Lille, Specialized in Machine Learning, Data Science and App dev, Lille, France.<br>
        6 months project using NLP and a large financial dataset to optimize the budgetting of Lille’s Hospital
        pharmaceutical department. As RMSE and MAE were lower for two models, the budgetting tool was successfully used
        by the hospital for 2025 budget forecasting.<br>
        6 months project developing an Android App (Kotlin) to detect cheats in Black Jack games using VR Glasses
        </p>

        <p class="important_text">2018 - 2020</p>
        <p>Two-year undergraduate intensive course in mathematics, physics and engineering to prepare for nationwide
        competitive examination (Classe Préparatoire PSI*), Fénelon Ste Marie, Paris.</p>

        <p class="important_text">2016 - 2018</p>
        <p>High School Diploma (Baccalaureate), Major in Science with highest honor. Stanislas boarding school, Paris</p>
    <div class='three'>
        <h1>Experience</h1>
    </div>
        <p class="important_text">May 2024 - Septembre 2024</p>
        <p>Data engineer internship at BSPORT SOLUTION, using Django framework and developing data scrapping and
        standardizing tools to migrate client’s data from their previous software provider to our software platform.<br>
        Coding projects were carried out on Linux operating system.<br>
        Participated to the collaborative development of a python oriented object tool that automates the data migration
        process
        </p>

        <p class="important_text">2022 - February 2023</p> 
        <p>Audit and corporate finance consulting internship, EY, Paris.<br>
        Participated to the full financial audit of a major french nuclear energy company.
        </p>

        <p class ="important_text">March 2022 - August 2022</p>
        <p>Data analyst and PowerBI internship in supply-chain and customer negociations, L'Oréal, Paris.<br>
        Used Python skills to transform data coming from our distributors’ cash registers and provided a BI report well
        appreciated by our commercial branch to negotiate with our distributors.<br>
        Over the 6 month period the amount of contested logistic penalties was more than doubled in value thanks to new
        french legislations Egalim III and to the visibility offered by my BI report.
        </p>
    <div class='three'>
        <h1>Skills</h1>
    </div>
    <p>
        Bash, Python (Django), C, Kotlin, SQL, Excel, Power BI <br>
        > Pandas, sk-learn, Numpy, Seaborn, Pytorch, Keras<br>
        > Wireshark, LinPEAS, nmap, GNS3, Hydra, burpsuite<br>
    </p>
</body>

<tail>
    <p class="rainbow">Thank you for visiting my online CV</p>
    <img class = "centered-image" src="https://media.licdn.com/dms/image/v2/D4E35AQHg78y4JlX7lg/profile-framedphoto-shrink_200_200/profile-framedphoto-shrink_200_200/0/1738582707223?e=1740409200&v=beta&t=zql93vRBiQa0H3fAyE4h_wuy2fyllj7Tyg2Nh6cmMZU" alt="Alexis Segurel CV Photo"/>
</tail>
</html>