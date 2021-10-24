<?php 

        $name =$_POST['name'];
        $Edu  =$_POST['edu'];
        $phone= $_POST['phone'];


        $Edu="-";
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
        $pdf->Cell(0,100,"Mobile & Whatsapp : 077-6542915, 076-0104094",0,0,'C');

        $pdf->Cell(0,11,"",0,1);
        $pdf->Cell(150,0,"",0,0);
        $pdf->Cell(30,40,"",1,0);


        $pdf->SetFont("","",8);
        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(152,0,"",0,0);
        $pdf->Cell(30,40,"Passport Size Photo",0,0);
        
        $pdf->image('Najeem HETC.png',5,11,50,60,'png');
        

        $pdf->SetFont("","B",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,100,"Admission To the Course of Study  ",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,48,"",0,1);
        $pdf->Cell(87,0,"",0,0,);
        $pdf->Cell(0,0,"{$name}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- ...........................................................................................",0,0);

        

        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,28,"1. Name With Initials   ",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,11,"",0,1);
        $pdf->Cell(87,0,"",0,0,);
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
        $pdf->Cell(87,0,"",0,0,);
        $pdf->Cell(0,0,"{$name}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- ...........................................................................................",0,0);




        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"3. Address",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(87,0,"",0,0,);
        $pdf->Cell(0,0,"{$name}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- ...........................................................................................",0,0);




        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"4. Date of Birth",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(97,0,"",0,0,);
        $pdf->Cell(0,0,"1997",0,1);

        $pdf->Cell(129,0,"",0,0,);
        $pdf->Cell(0,0,"10",0,1);

        $pdf->Cell(155,0,"",0,0,);
        $pdf->Cell(0,0,"02",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- Year................. Month................. Day.................",0,0);





        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"5. National Identity Card No",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(87,0,"",0,0,);
        $pdf->Cell(0,0,"{$name}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- ...........................................................................................",0,0);




        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,20,"6. Sex",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,9,"",0,1);
        $pdf->Cell(87,0,"",0,0,);
        $pdf->Cell(0,0,"Male",0,1);

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
        $pdf->Cell(0,0,"0775311974",0,1);

        $pdf->Cell(147,0,"",0,0,);
        $pdf->Cell(0,0,"{$phone}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- Mobile........................... Whatsapp...........................",0,0);

        

        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"8. Education Qualification",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(110,0,"",0,0,);
        $pdf->Cell(0,0,"{$Edu}",0,1);

        $pdf->Cell(157,0,"",0,0,);
        $pdf->Cell(0,0,"{$Edu}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- GCE(A/L)........................... GCE(O/L)...........................",0,0);




        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,8,"",0,1);
        $pdf->Cell(110,0,"",0,0,);
        $pdf->Cell(0,0,"10",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- Grade ...................................",0,0);




        $pdf->SetFont("","",10);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"9. Highest Qualification in English as a Subject",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(87,0,"",0,0,);
        $pdf->Cell(0,0,"{$name}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- ...........................................................................................",0,0);



        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"10. Details of Occupation (If any)",0,0,);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(87,0,"",0,0,);
        $pdf->Cell(0,0,"{$name}",0,1);

        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(80,0,"",0,0);
        $pdf->Cell(0,0,":- ...........................................................................................",0,0);



        $pdf->SetFont("","",11);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(9,0,"",0,0);
        $pdf->Cell(0,25,"I hereby ertify that the information furnished here is tru and accurate and to the best of my Knowledge",0,0,);



        $pdf->SetFont("","",11);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(9,0,"",0,0);
        $pdf->Cell(0,25,"Date : ..................................",0,0,);


        
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
        $pdf->Cell(0,32,"ILS Institute",0,0);

        $pdf->SetFont("","",11);
        $pdf->Cell(0,06,"",0,1);
        $pdf->Cell(35,0,"",0,0,);
        $pdf->Cell(0,33,"Education - 393 Likes - 395 Follows",0,0);


        $pdf->SetFont("","B",11);
        $pdf->Cell(0,2,"",0,1);
        $pdf->Cell(133,0,"",0,0);
        $pdf->Cell(0,0,"Entrolled and approved by",0,0);




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
        $pdf->Cell(0,21,"Director",0,0);



        $pdf->SetFont("","",12);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(3,0,"",0,0);
        $pdf->Cell(0,25,"",0,0,);

        $pdf->SetFont("","I",8);
        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(87,0,"",0,0,);
        $pdf->Cell(0,0,"",0,1);

        $pdf->Cell(0,0,"",0,1);
        $pdf->Cell(135,0,"",0,0);
        $pdf->Cell(0,26,"Institute of Language Studies (ILS)",0,0);

        $pdf->image('pic.png',20,242,25,20,'png');
        $pdf->output();

    

?>