<!DOCTYPE html>
<html>
    <head>
    <?php
$servername = "www.remotemysql.com:3306";
$username = "0xCWbnBOpR";
$password = "jOW2ygCCXS";
$db = "0xCWbnBOpR";

$conn = new mysqli($servername, $username, $password,$db);
$query = "SELECT * FROM Temp LIMIT 1";
$result=$conn->query($query);
$entrybook=$result->fetch_object();
?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="styles.css">
    </head>
    <style>
        main{
            border: 2px;
            border-radius: 0px;
            border-style: solid;
            border-color: rgb(160, 69, 69);
	        background-color: rgb(235, 235, 235);
	        width: 950px;
            height: 1200px;
            align-self: auto;
	        margin: auto;
	        font-size: 18px;
            text-align: center;
            background: url('watermark.png');
        }
        .btn {
            text-align: center;
            border: 1px;
            border-style: solid;
            border-color: rgb(0, 0, 0);
            background-color: rgb(131, 131, 131);
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            display: inline-block;
}

/* On mouse-over */
        .btn:hover {background: rgb(209, 209, 209);}
        hr{
            border: 1.5px;
            border-style: solid;
            border-color: black;
        }
        td.one{
            width: 5cm;
            text-align: left;
            padding: 10px;
            border: 1px solid black; 
            border-collapse: collapse;
            align-self: center;
        }
        td.two{
            width: 5cm;
            text-align: left;
            padding: 10px;
        }
        table.one, tr.one{
            padding: 10px;
            border: 1px solid black; 
            border-collapse: collapse;
            align-self: center;
        }
    </style>
    <title>
        Uni of XYZ | Hall Ticket
    </title>
    <body>
        <header>
            <div class="container">
                <div id="header_page">
                    <h1>
                        University of XYZ
                    </h1>
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="error.html"> Home </a>
                        </li>
                        <li>
                            <a href="About.html"> About </a>
                        </li>
                        <li>
                            <a href="error.html"> Register/Login (Signout?) </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <form style="align-self: auto;text-align: center; padding-top: 10px;">
            <button class="btn" onclick="return window.print(document.getElementById('hallt').innerHTML)">Print</button>
        </form>
        <br>
      <main id="hallt">
          <br>
         <b> University of XYZ </b>
         <br>
         <img src="uniLogo.png" alt="University logo" height="100" width="100" >
         <br>
         <b> Hall ticket for T.E.(2020) (Computer Science) Oct/Nov 2020</b>
         <br>
         <br>
         <hr>
         <section style="padding-left: 1.3cm;">
            <table class="one" >
                <tr class="one">
                    <td class="one"> 
                        Seat No: &nbsp; &nbsp;
                    </td class="one">
                    <td class="one">
                        PRN:
                    </td class="one">
                    <td class="one">
                        Centre Code:
                    </td class="one">
                    <td class="one">
                        College Code:
                    </td class="one">
                </tr class="one">
                <tr class="one">
                    <td class="one">
                   <?php echo $entrybook->seatno; ?>
                    </td class="one">
                    <td class="one">
                    <?php echo $entrybook->prn; ?>
                    </td class="one">
                    <td class="one">
                    <?php echo $entrybook->centercode; ?>
                    </td class="one">
                    <td class="one">
                    <?php echo $entrybook->collegecode; ?>
                    </td class="one">
                </tr class="one">
            </table>
         </section>
         <section style="float: left; padding-left: 0.9cm;">
            <br>
            <table>
                <tr>
                   <td class="two">
                       <b>Name: </b>
                   </td>
                   <td class="two">
                   <?php echo $entrybook->name; ?>
                   </td class="two">
                </tr>
                <tr>
                    <td class="two">
                        <b>Mother's Name: </b>
                    </td class="two">
                    <td class="two">
                    <?php echo $entrybook->mothername; ?>
                    </td class="two">
                </tr>
                            <tr>
                    <td class="two">
                        <b>Centre: </b>
                    </td class="two">
                    <td class="two">
                    <?php echo $entrybook->centre; ?>
                    </td class="two">
                </tr>
            </table>
        </section>
        <section style="float:right; padding-right: 1.5cm;">
            <br>
        <img style="border: black solid;" src="uniLogo.png" width="150" height="150">
     </section>
     <section style="float: left;padding-left: 1.7cm;">
         <br>
         <br>
         <br>
         <table class="one">
             <tr class="one">
                 <td class="one" style="width: max-content;">
                     Subject Code:
                 </td>
                 <td class="one" style="width: 10cm">
                     Subject name:
                 </td>
                 <td class="one" style="width: max-content;">
                     Type:
                 </td>
                 <td class="one" style="width: max-content;">
                     Exam date:
                 </td>
             </tr>
             <tr class="one">
                <td class="one" style="width: max-content;">
                    S101011
                </td>
                <td class="one" style="width: max-content;">
                    mySubject1
                </td>
                <td class="one" style="width: max-content;">
                    {Theory,Practical}
                </td>
                <td class="one" style="width: max-content;">
                    5th Aug,2020
                </td>
             </tr>
             <tr class="one">
                <td class="one" style="width: max-content;">
                    S101011
                </td>
                <td class="one" style="width: max-content;">
                    mySubject1
                </td>
                <td class="one" style="width: max-content;">
                    {Theory,Practical}
                </td>
                <td class="one" style="width: max-content;">
                    5th Aug,2020
                </td>
             </tr>
             <tr class="one">
                <td class="one" style="width: max-content;">
                    S101011
                </td>
                <td class="one" style="width: max-content;">
                    mySubject1
                </td>
                <td class="one" style="width: max-content;">
                    {Theory,Practical}
                </td>
                <td class="one" style="width: max-content;">
                    5th Aug,2020
                </td>
             </tr>
             <tr class="one">
                <td class="one" style="width: max-content;">
                    S101011
                </td>
                <td class="one" style="width: max-content;">
                    mySubject1
                </td>
                <td class="one" style="width: max-content;">
                    {Theory,Practical}
                </td>
                <td class="one" style="width: max-content;">
                    5th Aug,2020
                </td>
             </tr>
         </table>
        </section>
        <section style="float: left; padding-left: 0.2cm;padding-top: 1cm;">
            <b>Note: Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Cras purus augue, dapibus quis hendrerit vitae, scelerisque at ex. Vestibulum vel eros ultrices, 
                volutpat nibh a, iaculis nibh. Sed ullamcorper viverra suscipit. Nullam sed mi nisi. Aenean dui 
                lorem, efficitur sed vehicula at, porttitor vel erat. Maecenas lacus.</b>
        </section>
    </main>
    <footer style="float: left; padding-left: 14.8cm;">
        <p> University of XYZ, Copyright &copy; 2019 </p> 
     </footer>
    </body>
</html>
