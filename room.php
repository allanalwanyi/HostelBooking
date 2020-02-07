<?php 
    /**
 * Created by PhpStorm.
 * User: Allan
 * Date: 18/09/2019
 * Time: 02:50pm
 */
session_start();
echo $_SESSION['studentname'];
// Connecting to mysql database
$conn =mysqli_connect("localhost","root","","project");
$conn = mysqli_connect("localhost","root","","project") or die(mysql_error());
$id = $_SESSION['id'];


if (isset($_POST['btn_login'])) {

// check for required fields
    if (isset($_POST['email']) && isset($_POST['password'])) {

        $studentname = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $_SESSION['id'] = $studentname;

   
        $result = mysqli_query("SELECT * FROM students WHERE email = '$studentname' and password = '$password'") or die("Failed to query database" .mysqli_error());
        echo $result;

        $result = mysqli_query($conn, $result) or die(mysqli_error($con));

        $user_available = mysqli_num_rows($result);


            if ($user_available>0) {
                $_SESSION['email'] = $email;


                header("Location: index.php");
                die();
            } else {
                header("Location: index.php?error=incorrect credentials");
                die();
            }
        }


    } else {
        // required field is missing
        $response["success"] = 0;
        $response["message"] = "Required field(s) is missing";

       
    }




 ?>

 .<!DOCTYPE html>
<html>
<head>
    <title>ROOMS</title>

    <style type="text/css">
        body
        {
            background: #29a3a3;
            height: 100%;

        }
        h1
        {
            text-align: center;
            padding-right: 5%;
            padding-left: 5%;
            font-size: 20px;
        }
        form
        {
            padding: 2%;
            margin-left:30%;
            margin-right:30%;
            height: 20%;
            margin-top: 0%;
            margin-bottom: 0%;
            background-color: #00bfff;
        }
        ul 
        {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #003333;
        }

        li 
        {
            float: left;
            border-right: 1px solid #bbb;
        }

        li a 
        {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover 
        {
            background-color: #ff1a75;
        }
       .roomb
        {
             background-color: #66ff99;
             text-align: center;
             border: 4px solid black;
             width: 30%;
        }
        .roomg
        {
             background-color: #1aff1a; 
             text-align: center;
             border: 4px solid black;
             width: 30%;
        }
        .h
        {
            color: #cc0000;
            border: 3px solid black;
            border-right:40%;

        }
    </style>
</head>
<body>

        <h1>KENYA INDUSTRIAL TRAINING INSTITUTE ROOM BOOKING </h1>
        <br>
        <div>
        <ul>
        <li><a href="index.php">Home</a></li>
        <li ><a class="active" href="contactus.html">Contact Us</a></li>
        <li style="float:right"><a href="logout.php">Logout</a></li>
        
        </ul>
        </div>
        <br>
        <br>
        <br>
        <div >
            <form method="POST" action="room.php" class="roomb">
               <h1 class="h">MALE STUDENTS ONLY</h1>
               <br>
            <label for="sel1">MALE HOSTEL:</label>
            <select name="roomnumber">
                <option></option>
                <option value="RM_1">1</option>
                <option value="RM_2">2</option>
                <option value="RM_3">3</option>
                <option value="RM_4">4</option>
                <option value="RM_5">5</option>
                <option value="RM_6">6</option>
                <option value="RM_7">7</option>
                <option value="RM_8">8</option>
                <option value="RM_9">9</option>
                <option value="RM_10">10</option>
                <option value="RM_11">11</option>
                <option value="RM_12">12</option>
                <option value="RM_13">13</option>
                <option value="RM_14">14</option>
                <option value="RM_15">15</option>
                <option value="RM_16">16</option>
                <option value="RM_17">17</option>
                <option value="RM_18">18</option>
                <option value="RM_19">19</option>
                <option value="RM_20">20</option>
                <option value="RM_21">21</option>
                <option value="RM_22">22</option>
                <option value="RM_23">23</option>
                <option value="RM_24">24</option>
                <option value="RM_25">25</option>
                <option value="RM_26">26</option>
                <option value="RM_27">27</option>
                <option value="RM_28">28</option>
                <option value="RM_29">29</option>
                <option value="RM_30">30</option>
                <option value="RM_31">31</option>
                <option value="RM_32">32</option>
                <option value="RM_33">33</option>
                <option value="RM_34">34</option>
                <option value="RM_35">35</option>
                <option value="RM_36">36</option>
                <option value="RM_37">37</option>
                <option value="RM_38">38</option>
                <option value="RM_39">39</option>
                <option value="RM_40">40</option>
                <option value="RM_41">41</option>
                <option value="RM_42">42</option>
                <option value="RM_43">43</option>
                <option value="RM_44">44</option>
                <option value="RM_45">45</option>
                <option value="RM_46">46</option>
                <option value="RM_47">47</option>
                <option value="RM_48">48</option>
                <option value="RM_49">49</option>
                <option value="RM_50">50</option>
                <option value="RM_51">51</option>
                <option value="RM_52">52</option>
                <option value="RM_53">53</option>
                <option value="RM_54">54</option>
                <option value="RM_55">55</option>
                <option value="RM_56">56</option>
                <option value="RM_57">57</option>
                <option value="RM_58">58</option>
                <option value="RM_59">59</option>
                <option value="RM_60">60</option>
                <option value="RM_61">61</option>
                <option value="RM_62">62</option>
                <option value="RM_63">63</option>
                <option value="RM_64">64</option>
                <option value="RM_65">65</option>
                <option value="RM_66">66</option>
                <option value="RM_67">67</option>
                <option value="RM_68">68</option>
                <option value="RM_69">69</option>
                <option value="RM_70">70</option>
                <option value="RM_71">71</option>
                <option value="RM_72">72</option>
                <option value="RM_73">73</option>
                <option value="RM_74">74</option>
                <option value="RM_75">75</option>
                <option value="RM_76">76</option>
                <option value="RM_77">77</option>
                <option value="RM_78">78</option>
                <option value="RM_79">79</option>
                <option value="RM_80">80</option>
                <option value="RM_81">81</option>
                <option value="RM_82">82</option>
                <option value="RM_83">83</option>
                <option value="RM_84">84</option>
                <option value="RM_85">85</option>
                <option value="RM_86">86</option>
                <option value="RM_87">87</option>
                <option value="RM_88">88</option>
                <option value="RM_89">89</option>
                <option value="RM_90">90</option>
                <option value="RM_91">91</option>
                <option value="RM_92">92</option>
                <option value="RM_93">93</option>
                <option value="RM_94">94</option>
                <option value="RM_95">95</option>
                <option value="RM_96">96</option>
                <option value="RM_97">97</option>
                <option value="RM_98">98</option>
                <option value="RM_99">99</option>
                <option value="RM_100">100</option>
            </select>
            <input type="submit" name="insert" value="BOOK ROOM">
            </form>   
            
        </div>
        <br>
        <br>
        <div >
            <form method="POST" action="room.php" class="roomg">
               <h1 class="h">FEMALE STUDENTS ONLY</h1>
               <br>
               <label for="sel1">FEMALE HOSTEL:</label>
            <select name="roomnumber">
                <option></option>
                <option value="RF_1">1</option>
                <option value="RF_2">2</option>
                <option value="RF_3">3</option>
                <option value="RF_4">4</option>
                <option value="RF_5">5</option>
                <option value="RF_6">6</option>
                <option value="RF_7">7</option>
                <option value="RF_8">8</option>
                <option value="RF_9">9</option>
                <option value="RF_10">10</option>
                <option value="RF_11">11</option>
                <option value="RF_12">12</option>
                <option value="RF_13">13</option>
                <option value="RF_14">14</option>
                <option value="RF_15">15</option>
                <option value="RF_16">16</option>
                <option value="RF_17">17</option>
                <option value="RF_18">18</option>
                <option value="RF_19">19</option>
                <option value="RF_20">20</option>
                <option value="RF_21">21</option>
                <option value="RF_22">22</option>
                <option value="RF_23">23</option>
                <option value="RF_24">24</option>
                <option value="RF_25">25</option>
                <option value="RF_26">26</option>
                <option value="RF_27">27</option>
                <option value="RF_28">28</option>
                <option value="RF_29">29</option>
                <option value="RF_30">30</option>
                <option value="RF_31">31</option>
                <option value="RF_32">32</option>
                <option value="RF_33">33</option>
                <option value="RF_34">34</option>
                <option value="RF_35">35</option>
                <option value="RF_36">36</option>
                <option value="RF_37">37</option>
                <option value="RF_38">38</option>
                <option value="RF_39">39</option>
                <option value="RF_40">40</option>
                <option value="RF_41">41</option>
                <option value="RF_42">42</option>
                <option value="RF_43">43</option>
                <option value="RF_44">44</option>
                <option value="RF_45">45</option>
                <option value="RF_46">46</option>
                <option value="RF_47">47</option>
                <option value="RF_48">48</option>
                <option value="RF_49">49</option>
                <option value="RF_50">50</option>
                <option value="RF_51">51</option>
                <option value="RF_52">52</option>
                <option value="RF_53">53</option>
                <option value="RF_54">54</option>
                <option value="RF_55">55</option>
                <option value="RF_56">56</option>
                <option value="RF_57">57</option>
                <option value="RF_58">58</option>
                <option value="RF_59">59</option>
                <option value="RF_60">60</option>
                <option value="RF_61">61</option>
                <option value="RF_62">62</option>
                <option value="RF_63">63</option>
                <option value="RF_64">64</option>
                <option value="RF_65">65</option>
                <option value="RF_66">66</option>
                <option value="RF_67">67</option>
                <option value="RF_68">68</option>
                <option value="RF_69">69</option>
                <option value="RF_70">70</option>
                <option value="RF_71">71</option>
                <option value="RF_72">72</option>
                <option value="RF_73">73</option>
                <option value="RF_74">74</option>
                <option value="RF_75">75</option>
                <option value="RF_76">76</option>
                <option value="RF_77">77</option>
                <option value="RF_78">78</option>
                <option value="RF_79">79</option>
                <option value="RF_80">80</option>
                <option value="RF_81">81</option>
                <option value="RF_82">82</option>
                <option value="RF_83">83</option>
                <option value="RF_84">84</option>
                <option value="RF_85">85</option>
                <option value="RF_86">86</option>
                <option value="RF_87">87</option>
                <option value="RF_88">88</option>
                <option value="RF_89">89</option>
                <option value="RF_90">90</option>
                <option value="RF_91">91</option>
                <option value="RF_92">92</option>
                <option value="RF_93">93</option>
                <option value="RF_94">94</option>
                <option value="RF_95">95</option>
                <option value="RF_96">96</option>
                <option value="RF_97">97</option>
                <option value="RF_98">98</option>
                <option value="RF_99">99</option>
                <option value="RF_100">100</option>
            </select>
            <input type="submit" name="insert" value="BOOK ROOM">
            </form>   
        </div>

    

    <?php 
    if (isset($_SESSION['message'])) {
        echo "<div id='error_msg'>" .$_SESSION['message']."</div>";
        unset($_SESSION['message']);
    } 

    ?>
    <br>
    <br>
</body>
</html>


<?php 

    $conn= mysqli_connect("localhost","root","","project");

    if(isset($_POST['insert']))
    {
        $room_number = $_POST['roomnumber'];
        $query = "UPDATE students SET RoomNumber='$room_number' WHERE schoolid = '$id'";
        $query_run = mysqli_query($conn,$query);

        if ($query_run)
         {
           echo '<script type="text/javascript" >alert("Room Booked Sucessfuly")</script>';
           $mail = $_SESSION['id'];
           // echo $id;

        }
        else
        {
            echo '<script type="text/javascript" >alert("Room Not Booked Sucessfuly")</script>';
        }


        
    }

 ?>
