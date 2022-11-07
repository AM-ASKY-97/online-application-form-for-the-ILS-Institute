<?php 
         $course="-";
         $whatsapp="-";
         $mobile="-";
         $Ol="-";
         $Al="-";
         $high="-";
         $occu="-";
         $nic="-";

        $course=$_POST['course'];
        $name =$_POST['fname'];
        $iname  =$_POST['iname'];
        $address=$_POST['address'];
        $dob = $_POST['dob'];
        $nic=$_POST['nic'];
        $sex=$_POST['sex'];
        $mobile=$_POST['mobile'];
        $whatsapp=$_POST['whatsapp'];
        $edu=$_POST['edu'];
        $ed=$_POST['ed'];
        //$deg=$_POST['deg'];
        $high=$_POST['high'];
        $occu=$_POST['occu'];

        if ($edu != "other")
        {
            $newEdu = $edu;
        }

        else{
            $newEdu = $ed;
        }

       
        
        require ("fpdf184/fpdf.php");

        $pdf=new FPDF('P' , 'mm', 'A4');

        $pdf->AddPage();
        $pdf->SetFont("Arial","I",8);

        $pdf->Cell(0,266,"",1,0,);

        $pdf->Cell(0,5,"",0,1,);
        $pdf->Cell(120,0,"",0,0);
        $pdf->Cell(25,5,"Office Use Only - ",0,0);
        $pdf->Cell(35,7,"",1,0);
        

        $pdf->Cell(0,0,"",0,1);
        $pdf->SetFont("Arial", "B",24);
        $pdf->Cell(0,30,"APPLICATION FORM",0,0,'C');

        $pdf->Cell(0,0,"",0,1);
        $pdf->SetFont("","B",14);
        $pdf->Cell(0,50,"S.L. Najeem (SLDS)",0,0,'C');

        $pdf->SetFont("","I",8);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(0,60,"Training Of English",0,0,'C');

        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(0,67,"MBA (Eng-Medium)B.A in Soc.Sci(Eng-Medium).HND in English,",0,0,'C');

        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(0,74,"DSW (Merit), DHRM, DMM, DBM",0,0,'C');

        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(0,81,"Institute of Language Studies (ILS)",0,0,'C');

        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(0,88,"Sammanthurai",0,0,'C');

        $pdf->SetFont("","B",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(0,100,"Mobile & Whatsapp : 077-6542915, 075-7697386",0,0,'C');

        $pdf->Cell(0,11,"",0,1);
        $pdf->Cell(150,0,"",0,0);
        $pdf->Cell(30,40,"",1,0);


        $pdf->SetFont("","",8);
        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(152,0,"",0,0);
        $pdf->Cell(30,40,"Passport Size Photo",0,0);
        
        $pdf->image('./Assets/image/Najeem HETC.png',5,11,50,60,'png');
        

        $pdf->SetFont("","B",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,100,"Admission To the Course of Study  ",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,48,"",0,1);
        $pdf->Cell(84,0,"",0,0,);
        $pdf->Cell(0,0,"{$course}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- ...........................................................................................",0,0);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,6,"",0,1);
        $pdf->Cell(84,0,"",0,0,);
        //$pdf->Cell(0,0,"{}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
       // $pdf->Cell(0,1,":- ...........................................................................................",0,0);

        

        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,17,"1. Name With Initials   ",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,6,"",0,1);
        $pdf->Cell(84,0,"",0,0,);
        $pdf->Cell(0,0,"{$name}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- ...........................................................................................",0,0);



        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"2. Name/Names donoted by Initials   ",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(84,0,"",0,0,);
        $pdf->Cell(0,0,"{$iname}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- ...........................................................................................",0,0);




        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"3. Address",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(84,0,"",0,0,);
        $pdf->Cell(0,0,"{$address}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- ...........................................................................................",0,0);




        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"4. Date of Birth",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(84,0,"",0,0,);
        $pdf->Cell(0,0,"{$dob}",0,1);

        $pdf->Cell(129,0,"",0,0,);
        $pdf->Cell(0,0,"",0,1);

        $pdf->Cell(155,0,"",0,0,);
        $pdf->Cell(0,0,"",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":-........................................................",0,0);





        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"5. National Identity Card No",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(84,0,"",0,0,);
        $pdf->Cell(0,0,"{$nic}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- ...........................................................................................",0,0);




        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,20,"6. Sex",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,9,"",0,1);
        $pdf->Cell(84,0,"",0,0,);
        $pdf->Cell(0,0,"{$sex}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- ...................................",0,0);



        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"7. Contact No",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(99,0,"",0,0,);
        $pdf->Cell(0,0,"{$mobile}",0,1);

        $pdf->Cell(147,0,"",0,0,);
        $pdf->Cell(0,0,"{$whatsapp}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- Mobile........................... Whatsapp...........................",0,0);

        

        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"8. Education Qualification",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(84,0,"",0,0,);
        $pdf->Cell(0,0,"{$newEdu}",0,1);

        $pdf->Cell(170,0,"",0,0,);
        //$pdf->Cell(0,0,"{$edu}",0,1);

        $pdf->Cell(102,0,"",0,0,);
        //$pdf->Cell(0,0,"{$edu}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- ....................................................",0,0);






        $pdf->SetFont("","",10);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,20,"9. Highest Qualification in English as a Subject",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,8,"",0,1);
        $pdf->Cell(84,0,"",0,0,);
        $pdf->Cell(0,0,"{$high}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- ...........................................................................................",0,0);



        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"10. Details of Occupation (If any)",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(84,0,"",0,0,);
        $pdf->Cell(0,0,"{$occu}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- ...........................................................................................",0,0);



        $pdf->SetFont("","B",10);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(9,0,"",0,0);
        $pdf->Cell(0,25,"I hereby ertify that the information furnished here is tru and accurate and to the best of my Knowledge",0,0,);


        $pdf->SetFont("","",11);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(9,0,"",0,0);
        $pdf->Cell(0,30,"Date : ..................................",0,0,);


        
        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(87,0,"",0,0,);
        $pdf->Cell(0,0,"",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(135,0,"",0,0);
        $pdf->Cell(0,0,"........................................",0,0);




        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,03,"",0,1);
        $pdf->Cell(87,0,"",0,0,);
        $pdf->Cell(0,0,"",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(130,0,"",0,0);
        $pdf->Cell(0,0,"Signature of Applicant/ Guardian",0,0);


        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"",0,0,);
        

        $pdf->SetFont("","B",14);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(35,0,"",0,0,);
        $pdf->Cell(0,40,"ILS Institute",0,0);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,06,"",0,1);
        $pdf->Cell(35,0,"",0,0,);
        $pdf->Cell(0,43,"Education - 393 Likes - 395 Follows",0,0);


        $pdf->SetFont("","B",11);
        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(133,0,"",0,0);
        $pdf->Cell(0,5,"Entrolled and approved by",0,0);




        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,3,"",0,1);
        $pdf->Cell(87,0,"",0,0,);
        $pdf->Cell(0,0,"",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(135,0,"",0,0);
        $pdf->Cell(0,14,"........................................",0,0);




        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(87,0,"",0,0,);
        $pdf->Cell(0,0,"",0,1);

        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(150,0,"",0,0);
        $pdf->Cell(0,25,"Director",0,0);



        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,22,"",0,0,);

        $pdf->SetFont("","I",8);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(87,0,"",0,0,);
        $pdf->Cell(0,0,"",0,1);

        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(135,0,"",0,0);
        $pdf->Cell(0,35,"Institute of Language Studies (ILS)",0,0);

        $pdf->image('./Assets/image/pic.png',20,242,25,20,'png');
        $pdf->output();
