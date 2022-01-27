function calculate(){
			/RECUPERATION FORMULAIRE PREMIERE LIGNE/
		var p1= Number(document.getElementById("p1").value);
		var q1= Number(document.getElementById("q1").value);
		var r1=document.getElementById("r1").value=(p1*q1);
			/RECUPERATION FORMULAIRE DEUXIEME LIGNE/
		var p2=Number(document.getElementById("p2").value);
		var q2=Number(document.getElementById("q2").value);
		var r2=document.getElementById("r2").value=(p2*q2);
			/RECUPERATION FORMULAIRE TROISIEME LIGNE/
		var p3=Number(document.getElementById("p3").value);
		var q3=Number(document.getElementById("q3").value);
		var r3=document.getElementById("r3").value=(p3*q3);
			/RECUPERATION FORMULAIRE QUATRIEME LIGNE/
		var p4=Number(document.getElementById("p4").value);
		var q4=Number(document.getElementById("q4").value);
		var r4=document.getElementById("r4").value=(p4*q4);
			/RECUPERATION FORMULAIRE CINQUIEME LIGNE/
		var p5=Number(document.getElementById("p5").value);
		var q5=Number(document.getElementById("q5").value);
		var r5=document.getElementById("r5").value=(p5*q5);
			/RECUPERATION FORMULAIRE SIXIEME LIGNE/
		var p6=Number(document.getElementById("p6").value);
		var q6=Number(document.getElementById("q6").value);
		var r6=document.getElementById("r6").value=(p6*q6);
			/RECUPERATION FORMULAIRE SEPTIEME LIGNE/
		var p7=Number(document.getElementById("p7").value);
		var q7=Number(document.getElementById("q7").value);
		var r7=document.getElementById("r7").value=(p7*q7);
			/RECUPERATION FORMULAIRE HUITIEME LIGNE/
		var p8=Number(document.getElementById("p8").value);
		var q8=Number(document.getElementById("q8").value);
		var r8=document.getElementById("r8").value=(p8*q8);
			/RECUPERATION FORMULAIRE NEUFIEME LIGNE/
		var p9=Number(document.getElementById("p9").value);
		var q9=Number(document.getElementById("q9").value);
		var r9=document.getElementById("r9").value=(p9*q9);
			/RECUPERATION FORMULAIRE DIXIEME LIGNE/
		var p10=Number(document.getElementById("p10").value);
		var q10=Number(document.getElementById("q10").value);
		var r10=document.getElementById("r10").value=(p10*q10);
			/RECUPERATION FORMULAIRE ONZIEME LIGNE/
		var p11=Number(document.getElementById("p11").value);
		var q11=Number(document.getElementById("q11").value);
		var r11=document.getElementById("r11").value=(p11*q11);

		
		var R1 =Number(document.getElementById("R1").value);
		var ST1= Number(document.getElementById("ST1").value);
		document.getElementById("ST1").value=(r1+r2+r3+r4+r5+r6+r7+r8+r9+r10+r11);
		var ST1_R1=Number(document.getElementById("ST1_R1").value);
		document.getElementById("ST1_R1").value=(ST1-R1);
		var I1=parseInt(document.getElementById("I1").value+"%");
		var t1=parseInt(document.getElementById("t1").value);
		document.getElementById("t1").value=Math.round((ST1*I1)/100);
		var EXP_m1=Number(document.getElementById("EXP_m1").value);
		var solde=Number(document.getElementById("solde").value);
		document.getElementById("solde").value=(ST1_R1+t1+EXP_m1);
		}
		