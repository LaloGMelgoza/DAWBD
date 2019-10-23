<?php 

	if($_SERVER["REQUEST_METHOD"] == "POST") {
    	if(empty($_POST["album"])) {
    		include("forma.html");
    		echo "<p class='error'> Favor de elegir una opcion. </p>";
    		include("preguntas.html");
    	}
    	else{
            $album = ($_POST["album"]);
            if(isset($album)){
            	if ($album == "absol") {
            		include("forma.html");
            		echo "<p class='despegar'> Hysteria, track 8 del album Absolution: </p>";
            		echo "<p class=center> It's bugging me<br>
											Grating me<br>
											And twisting me around<br>
											Yeah I'm endlessly<br>
											Caving in<br>
											And turning inside out<br>
											'Cause I want it now<br>
											I want it now<br>
											Give me your heart and your soul<br>
											And I'm breaking out<br>
											I'm breaking out<br>
											Last chance to lose control<br>
											Yeah it's holding me<br>
											Morphing me<br>
											And forcing me to strive<br>
											To be endlessly<br>
											Caving in<br>
											And dreaming I'm alive<br>
											'Cause I want it now<br>
											I want it now<br>
											Give me your heart and your soul<br>
											I'm not breaking down<br>
											I'm breaking out<br>
											Lace chance to lose control<br>
											And I want you now<br>
											I want you now<br>
											I feel my heart implode<br>
											And I'm breaking out<br>
											Escaping now<br>
											Feeling my faith erode </p>";
            	}
            	else if ($album == "black") {
            		include("forma.html");
            		echo "<p class='despegar'> Starlight, track 2 del album Black Holes & Revelations: </p>";
            		echo "<p class=center>Far away<br>
											The ship is taking me far away<br>
											Far away from the memories<br>
											Of the people who care if I live or die<br>
											The starlight<br>
											I will be chasing a starlight<br>
											Until the end of my life<br>
											I don't know if it's worth it anymore<br>
											Hold you in my arms<br>
											I just wanted to hold<br>
											You in my arms<br>
											My life<br>
											You electrify my life<br>
											Let's conspire to ignite<br>
											All the souls that would die just to feel alive<br>
											Now I'll never let you go<br>
											If you promised not to fade away<br>
											Never fade away<br>
											Our hopes and expectations<br>
											Black holes and revelations<br>
											Our hopes and expectations<br>
											Black holes and revelations<br>
											Hold you in my arms<br>
											I just wanted to hold<br>
											You in my arms<br>
											Far away<br>
											The ship is taking me far away<br>
											Far away from the memories<br>
											Of the people who care if I live or die<br>
											And I'll never let you go<br>
											If you promise not to fade away<br>
											Never fade away<br>
											Our hopes and expectations<br>
											Black holes and revelations<br>
											Our hopes and expectations<br>
											Black holes and revelations<br>
											Hold you in my arms<br>
											I just wanted to hold<br>
											You in my arms<br>
											I just wanted to hold<br>
											 </p>";
            	}
            	else if ($album == "resist") {
            		include("forma.html");
            		echo "<p class='despegar'> Uprising, track 1 del album The Resistance: </p>";
            		echo "<p class=center> The paranoia is in bloom, the P-R<br>
											Transmissions will resume<br>
											They'll try to push drugs<br>
											That keep us all dumbed down and hope that<br>
											We will never see the truth around<br>
											(So come on)<br>
											Another promise, another scene,<br>
											Another package lie to keep us trapped in greed<br>
											With all the green belts wrapped around our minds<br>
											And endless red tape to keep the truth confined<br>
											(So come on)<br>
											They will not force us<br>
											They will stop degrading us<br>
											They will not control us<br>
											We will be victorious <br>
											(So come on)<br>
											Interchanging mind control<br>
											Come let the revolution take its toll if you could<br>
											Flick a switch and open your third eye, you'd see that<br>
											We should never be afraid to die<br>
											(So come on)<br>
											Rise up and take the power back, it's time that<br>
											The fat cats had a heart attack, you know that<br>
											Their time is coming to an end<br>
											We have to unify and watch our flag ascend<br>
											(So come on)<br>
											They will not force us<br>
											They will stop degrading us<br>
											They will not control us<br>
											We will be victorious<br>
											(So come on)<br>
											They will not force us<br>
											They will stop degrading us<br>
											They will not control us<br>
											We will be victorious<br>
											(So come on)<br>
											Hey, hey, hey, hey </p>";
            	}
            	else if ($album == "drones") {
            		include("forma.html");
            		echo "<p class='despegar'> Psycho, track 3 del album Drones: </p>";
            		echo "<p class=center> Love, it will get you nowhere<br>
											You are on your own<br>
											Lost in the wild<br>
											So come to me now<br>
											I could use someone like you<br>
											Someone who'll kill on my command<br>
											And asks no questions<br>
											I'm gonna make you<br>
											I'm gonna break you<br>
											I'm gonna make you<br>
											A fucking psycho<br>
											A fucking psycho<br>
											A fucking psycho<br>
											Your ass belongs to me now<br>
											Are you a human drone?<br>
											(Aye, sir!)<br>
											Are you a killing machine?<br>
											(Aye, sir!)<br>
											I'm in control, motherfucker, do you understand?<br>
											(Aye, sir!)<br>
											Your mind is just a program<br>
											And I'm the virus<br>
											I'm changing the station<br>
											I'll improve your thresholds<br>
											I'll turn you into a super drone (super drone)<br>
											And you will kill on my command<br>
											And I won't be responsible<br>
											I'm gonna make you<br>
											I'm gonna break you<br>
											I'm gonna make you<br>
											A fucking psycho<br>
											A fucking psycho<br>
											A fucking psycho<br>
											Your ass belongs to me now<br>
											Are you a psycho killer? Say I'm a psycho killer!<br>
											(I am a psycho killer!)<br>
											Scream it!<br>
											(I am a psycho killer!)<br>
											Show me your war face!<br>
											(AHHHH!)<br>
											You are a pussy! I said show me your war face!<br>
											(AHHHH!)<br>
											I'm gonna make you<br>
											I'm gonna break you<br>
											I'm gonna make you<br>
											A fucking psycho<br>
											A fucking psycho<br>
											A fucking psycho<br>
											Your ass belongs to me now<br>
											Your ass belongs to me now<br>
											Your ass belongs to me now </p>";
            	}
            	else if ($album == "simul") {
            		include("forma.html");
            		echo "<p class='despegar'> Thought Contagion, track 7 del album Simulation Theory: </p>";
            		echo "<p class=center> Strung out falling from the big time<br>
											Welcome to the infinite black skies<br>
											Brain clans fractured identity<br>
											Fragments and scattered debris<br>
											Thought contagion<br>
											Thought contagion<br>
											Fall down long winds are counted out<br>
											Prop me up before I black out<br>
											Withdraw before you're out of time<br>
											A clean slate and buried war crimes<br>
											You've been bitten by a true believer<br>
											You've been bitten by someone who's hungrier than you<br>
											You've been bitten by a true believer<br>
											You've been bitten by someone's false beliefs<br>
											Thought contagion<br>
											Thought contagion<br>
											They'll never do what you want them to<br>
											Give it up and watch them break through<br>
											It's too late for a revolution<br>
											Brace for the final solution<br>
											Thought contagion<br>
											Thought contagion<br>
											You've been bit by a true believer<br>
											You've been bit by someone who's hungrier then you<br>
											You've been bit by a true believer<br>
											You've been bitten by someone's false beliefs<br>
											Thought contagion<br>
											Thought contagion<br>
											Strung out falling from the big time<br>
											Welcome to the infinite black skies<br>
											It's too late for a revolution<br>
											Brace for the final solution </p>";
            	}

            	include("preguntas.html");
            }
        } 
    }
    else {
        include("forma.html");
    }

?> 
