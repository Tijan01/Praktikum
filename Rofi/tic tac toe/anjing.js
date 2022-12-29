// Untuk mencari nilai random dari 1 sampai 9
// var nilaiRandom = Math.floor(Math.random() * (0 - 9 + 1) + 9);
// document.getElementById("1").innerHTML = nilaiRandom;

function reset() {
	location.reload();
	document.getElementById('1').value = '';
	document.getElementById("2").value = '';
	document.getElementById("3").value = '';
	document.getElementById("4").value = '';
	document.getElementById("5").value = '';
	document.getElementById("6").value = '';
	document.getElementById("7").value = '';
	document.getElementById("8").value = '';
	document.getElementById("9").value = '';
}

turn = 0;
function set1(){
    if(turn == 1){
        document.getElementById("1").value = "X"; 
        turn = 0;
    }
    else{
        document.getElementById("1").value = "0"; 
        turn = 1;
    }
    document.getElementById("1").disabled = true
}
function set2(){
    if(turn == 1){
        document.getElementById("2").value = "X"; 
        turn = 0;
        // document.getElementById("1").disabled = true;
    }
    else{
        document.getElementById("2").value = "0"; 
        turn = 1;
    } 
    
    document.getElementById("2").disabled = true;
}
function set3(){
    if(turn == 1){
        document.getElementById("3").value = "X"; 
        turn = 0;
        // document.getElementById("1").disabled = true;
    }
    else{
        document.getElementById("3").value = "0"; 
        turn = 1;
    }  
    document.getElementById("3").disabled = true;
}
function set4(){
    if(turn == 1){
        document.getElementById("4").value = "X"; 
        turn = 0;
        // document.getElementById("1").disabled = true;
    }
    else{
        document.getElementById("4").value = "0"; 
        turn = 1;
    } 
    document.getElementById("4").disabled = true;
}
function set5(){
    if(turn == 1){
        document.getElementById("5").value = "X"; 
        turn = 0;
        // document.getElementById("1").disabled = true;
    }
    else{
        document.getElementById("5").value = "0"; 
        turn = 1;
    }
    document.getElementById("5").disabled = true;
}
function set6(){
    if(turn == 1){
        document.getElementById("6").value = "X"; 
        turn = 0;
        // document.getElementById("1").disabled = true;
    }
    else{
        document.getElementById("6").value = "0"; 
        turn = 1;
    }
    document.getElementById("6").disabled = true;
}
function set7(){
    if(turn == 1){
        document.getElementById("7").value = "X";
        turn = 0;
        // document.getElementById("1").disabled = true;
    }
    else{
        document.getElementById("7").value = "0"; 
        turn = 1;
    }
    document.getElementById("7").disabled = true;
}
function set8(){
    if(turn == 1){
        document.getElementById("8").value = "X"; 
        turn = 0;
        // document.getElementById("1").disabled = true;
    }
    else{
        document.getElementById("8").value = "0"; 
        turn = 1;
    }
    document.getElementById("8").disabled = true;
}
function set9(){
    if(turn == 1){
        document.getElementById("9").value = "X"; 
        turn = 0;
        // document.getElementById("1").disabled = true;
    }
    else{
        document.getElementById("9").value = "0"; 
        turn = 1;
    }
    document.getElementById("9").disabled = true;
}

function check(){
    
    // memasukan nilai yg ada di papan ke dalam variabel
    var b1, b2, b3, b4, b5, b6, b7, b8, b9;
    b1 = document.getElementById("1").value;
    b2 = document.getElementById("2").value;
    b3 = document.getElementById("3").value;
    b4 = document.getElementById("4").value;
    b5 = document.getElementById("5").value;
    b6 = document.getElementById("6").value;
    b7 = document.getElementById("7").value;
    b8 = document.getElementById("8").value;
    b9 = document.getElementById("9").value;

    // Checking if Player X won or not and after
    // that disabled all the other fields
    if ( b1 == 'X' && b2 == 'X' && b3 == 'X') { // horizontal paling atas
        
        document.getElementById("4").disabled = true;
        document.getElementById("5").disabled = true;
        document.getElementById("6").disabled = true;
        document.getElementById("7").disabled = true;
        document.getElementById("8").disabled = true;
        document.getElementById("9").disabled = true;
        window.alert('Player X won');
    }
    else if ( b1 == 'X' &&  b4 == 'X' && b7 == 'X') { // vertikal paling kiri
        
        document.getElementById("2").disabled = true;
        document.getElementById("3").disabled = true;
        document.getElementById("5").disabled = true;
        document.getElementById("6").disabled = true;
        document.getElementById("8").disabled = true;
        document.getElementById("9").disabled = true;

        window.alert('Player X won');
    }
    else if (b7 == 'X' && b8 == 'X' && b9 == 'X') { // horizontal paling bawah
        
        document.getElementById("1").disabled = true;
        document.getElementById("2").disabled = true;
        document.getElementById("3").disabled = true;
        document.getElementById("4").disabled = true;
        document.getElementById("5").disabled = true;
        document.getElementById("6").disabled = true;
        window.alert('Player X won');
    }
    else if (b3 == 'X' && b6 == 'X' &&  b9 == 'X') { // vertikal paling kanan
        
        document.getElementById("1").disabled = true;
        document.getElementById("2").disabled = true;
        document.getElementById("4").disabled = true;
        document.getElementById("5").disabled = true;
        document.getElementById("7").disabled = true;
        document.getElementById("8").disabled = true;
        window.alert('Player X won');
    }
    else if (b1 == 'X' && b5 == 'X' && b9 == 'X') { // silang dari kiri atas ke kanan bawah
        
        document.getElementById("2").disabled = true;
        document.getElementById("3").disabled = true;
        document.getElementById("4").disabled = true;
        document.getElementById("6").disabled = true;
        document.getElementById("7").disabled = true;
        document.getElementById("8").disabled = true;
        window.alert('Player X won');
    }
    else if (b3 == 'X' && b5 == 'X' && b7 == 'X') { // silang dari kanan atas ke kiri bawah
        
        document.getElementById("1").disabled = true;
        document.getElementById("2").disabled = true;
        document.getElementById("4").disabled = true;
        document.getElementById("6").disabled = true;
        document.getElementById("8").disabled = true;
        document.getElementById("9").disabled = true;
        window.alert('Player X won');
    }
    else if ( b2 == 'X' && b5 == 'X' && b8 == 'X') { // vertikal tengah
        
        document.getElementById("1").disabled = true;
        document.getElementById("3").disabled = true;
        document.getElementById("4").disabled = true;
        document.getElementById("6").disabled = true;
        document.getElementById("7").disabled = true;
        document.getElementById("9").disabled = true;
        window.alert('Player X won');
    }
    else if (b4 == 'X' && b5 == 'X' && b6 == 'X') { // horizontal tengah
        document.getElementById("1").disabled = true;
        document.getElementById("2").disabled = true;
        document.getElementById("3").disabled = true;
        document.getElementById("7").disabled = true;
        document.getElementById("8").disabled = true;
        document.getElementById("9").disabled = true;
        window.alert('Player X won');
    }
    // Checking of Player X finish
        //=========================================================================================//
    // Checking for Player 0 starts, Is player 0 won or not and after that disabled all the other fields
    else if (b1 == '0' && b2 == '0' &&  b3 == '0') { // horizontal atas 
        document.getElementById("4").disabled = true;
        document.getElementById("5").disabled = true;
        document.getElementById("6").disabled = true;
        document.getElementById("7").disabled = true;
        document.getElementById("8").disabled = true;
        document.getElementById("9").disabled = true;
        window.alert('Player 0 won');
    }
    else if (b1 == '0' && b4 == '0' && b7 == '0') { // vertikal kiri
        document.getElementById("2").disabled = true;
        document.getElementById("3").disabled = true;
        document.getElementById("5").disabled = true;
        document.getElementById("6").disabled = true;
        document.getElementById("8").disabled = true;
        document.getElementById("9").disabled = true;
        window.alert('Player 0 won');
    }
    else if ((b7 == '0' || b7 == '0') && (b8 == '0' || b8 == '0') && (b9 == '0' || b9 == '0')) { //horizontal bawah
        document.getElementById("1").disabled = true;
        document.getElementById("2").disabled = true;
        document.getElementById("3").disabled = true;
        document.getElementById("4").disabled = true;
        document.getElementById("5").disabled = true;
        document.getElementById("6").disabled = true;
        window.alert('Player 0 won');
    }
    else if (b3 == '0' && b6 == '0' && b9 == '0') { // vertikal kanan
        document.getElementById("1").disabled = true;
        document.getElementById("2").disabled = true;
        document.getElementById("4").disabled = true;
        document.getElementById("5").disabled = true;
        document.getElementById("7").disabled = true;
        document.getElementById("8").disabled = true;
        window.alert('Player 0 won');
    }
    else if (b1 == '0' && b5 == '0' &&  b9 == '0') { //silang kiri atas ke kanan bawah
        document.getElementById("2").disabled = true;
        document.getElementById("3").disabled = true;
        document.getElementById("4").disabled = true;
        document.getElementById("6").disabled = true;
        document.getElementById("7").disabled = true;
        document.getElementById("8").disabled = true;
        window.alert('Player 0 won');
    }
    else if ((b3 == '0' || b3 == '0') && (b5 == '0' || b5 == '0') && (b7 == '0' || b7 == '0')) {  //silang kanan atas ke kiri bawah
        document.getElementById("1").disabled = true;
        document.getElementById("2").disabled = true;
        document.getElementById("4").disabled = true;
        document.getElementById("6").disabled = true;
        document.getElementById("8").disabled = true;
        document.getElementById("9").disabled = true;
        window.alert('Player 0 won');
    }
    else if ((b2 == '0' || b2 == '0') && (b5 == '0' || b5 == '0') && (b8 == '0' || b8 == '0')) { // vertikal tengah
        document.getElementById("1").disabled = true;
        document.getElementById("3").disabled = true;
        document.getElementById("4").disabled = true;
        document.getElementById("6").disabled = true;
        document.getElementById("7").disabled = true;
        document.getElementById("9").disabled = true;
        window.alert('Player 0 won');
    }
    else if (b4 == '0' && b5 == '0' && b6 == '0') { //horizontal tengah
        document.getElementById("1").disabled = true;
        document.getElementById("2").disabled = true;
        document.getElementById("3").disabled = true;
        document.getElementById("7").disabled = true;
        document.getElementById("8").disabled = true;
        document.getElementById("9").disabled = true;
        window.alert('Player 0 won');
    }

    // Checking of Player 0 finish
    // Here, Checking about Tie
    else if ((b1 == 'X' || b1 == '0') && (b2 == 'X'
        || b2 == '0') && (b3 == 'X' || b3 == '0') &&
        (b4 == 'X' || b4 == '0') && (b5 == 'X' ||
        b5 == '0') && (b6 == 'X' || b6 == '0') &&
        (b7 == 'X' || b7 == '0') && (b8 == 'X' ||
        b8 == '0') && (b9 == 'X' || b9 == '0')) {
            window.alert('Match Tie');
    }
    else {

        // Here, Printing Result
        if (flag == 1) {
            document.getElementById('print')
                .innerHTML = "Player X Turn";
        }
        else {
            document.getElementById('print')
                .innerHTML = "Player 0 Turn";
        }
    }
}