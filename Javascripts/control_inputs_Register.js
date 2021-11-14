var flag;
var prog;
var n, s, p, m, pass, rpass;
var patt = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        function Val() {
            n = document.getElementById("name").value;
            s = document.getElementById("surname").value;
            p = document.getElementById("phone").value;
            m = document.getElementById("mail").value;
            pass = document.getElementById("pass").value;
            rpass = document.getElementById("rpass").value;
        } // End function Val

        function ValName() {
            n = document.getElementById("name").value;
            if (n.length < 3 || n.length > 15 || n == null || n=="" || n.match(/[0-9]/g) || n.match(/[" "]/g)) {
                    flag++;
                    document.getElementById("name").style.border = "1px solid red";
            }
            else {
                document.getElementById("name").style.border = "1px solid green";
            } // End-If
        } // End function ValName

        function ValSurname() {
            s = document.getElementById("surname").value;
            if (s.length < 3 || s.length > 15 || s == null || s=="" || s.match(/[0-9]/g) || s.match(/[" "]/g)) {
                flag++;
                document.getElementById("surname").style.border = "1px solid red";
            }
            else {
                document.getElementById("surname").style.border = "1px solid green";
            } // End-If
        } // End function ValSurname

        function ValPhone() {
            p = document.getElementById("phone").value;
            if (isNaN(p) || p == "" || p.length != 10 || p.match(/[" "]/g) || p.charAt(0) != 6 || p.charAt(1) != 9){
                flag++;
                document.getElementById("phone").style.border = "1px solid red";
            }
            else {
                document.getElementById("phone").style.border = "1px solid green";
            } // End-If
        } // End function ValPhone

        function ValMail() {
            //var Ascii; // Ascii Charachers
            //Ascii.fromCharCode(32); //Space
            m = document.getElementById("mail").value;
            if (!(patt.test(m)) || m.length > 50 || m == "" || m == null || m.match(/[" "]/g)) {
                flag++;
                document.getElementById("mail").style.border = "1px solid red";
            }
            else {
                document.getElementById("mail").style.border = "1px solid green";
            } // End-If
        } // End function ValMail

        function ValPass() {
            pass = document.getElementById("pass").value;
            if (!pass.match(/[a-z]/g) || !pass.match(/[A-Z]/g) || !pass.match(/[0-9]/g) || pass.length <= 5 || pass.length > 20 || pass == null || pass == "" || pass.match(/[" "]/g)) {
                flag++;
                document.getElementById("pass").style.border = "1px solid red";
                if (pass.length > 0 && pass.length <= 5) {
                    spass.style.color = "red";
                    spass.innerHTML = "* Μικρός κωδικός πρόσβασης";
                }
                else if (pass.length > 20) {
                    spass.style.color = "red";
                    spass.innerHTML = "* Πολύ μεγάλος κωδικός πρόσβασης";
                }
                else {
                    spass.style.color = "red";
                    spass.innerHTML = " ";
                } // End-If
            } // Password Length (min> 5 --- max <= 20),Special Char,Number
            else {
                if (pass.length >= 6 && pass.length < 10) {
                    document.getElementById("pass").style.border = "1px solid green";
                    spass.style.color = "white";
                    spass.innerHTML = "Μέτριος κωδικός πρόσβασης";
                }
                else if (pass.length >= 10 && pass.length < 15) {
                    document.getElementById("pass").style.border = "1px solid green";
                    spass.style.color = "gold";
                    spass.innerHTML = "Μεγάλος κωδικός πρόσβασης";
                }
                else {
                    document.getElementById("pass").style.border = "1px solid green";
                    spass.style.color = "green";
                    spass.innerHTML = "Ισχυρός κωδικός πρόσβασης!";
                } // End-If
            } // End-If
        } // End function ValPass

        function ValRpass() {
            rpass = document.getElementById("rpass").value;
            pass = document.getElementById("pass").value;
            if (pass != rpass || rpass == null || rpass == "" || rpass.length >= 0 && rpass.length <= 5 || rpass.length > 20 || !rpass.match(/[a-z]/g) || !rpass.match(/[A-Z]/g) || !rpass.match(/[0-9]/g) || rpass.match(/[" "]/g)) {
                flag++;
                document.getElementById("rpass").style.border = "1px solid red";
                if (pass != rpass && rpass.length > 0 && rpass.length <= 20 && rpass != null) {
                    srpass.style.color = "red";
                    srpass.innerHTML = "* Οι κωδικοί πρόσβασης δεν ταιριάζουν!";
                }
                else {
                    srpass.innerHTML = " ";
                }
            }
            else {
                document.getElementById("rpass").style.border = "1px solid green";
                srpass.innerHTML = " ";
            }// End-If
            rpass.innerHTML = " ";
        } // End function ValRpass

        /*function Prog(){
            prog = document.getElementById(prog)
            setInterval(() => {
                document.getElementsByTagName('progress')[0].value
                = document.getElementsByTagName('progress')[0].value + 1
            }, 25)
        }*/

        function FormVal() {
            flag = 0;
            Val();
            ValName();
            ValSurname();
            ValPhone();
            ValMail();
            ValPass();
            ValRpass();
            if (flag > 0)
                return false;
        } // End function FormVal
