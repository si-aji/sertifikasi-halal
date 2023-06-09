<html>
    <head>
        <script>

            function editrow() {
                c = this.parentNode;
                a1 = document.createElement("input");
                a1.type = "text";
                a1.value = c.parentNode.firstChild.firstChild.firstChild.data;
                a2 = document.createElement("input");
                a2.type = "text";
                a2.value = c.parentNode.childNodes[1].firstChild.firstChild.data;
                c.parentNode.firstChild.replaceChild(
                    a1,
                    c.parentNode.firstChild.firstChild
                );

                c.parentNode.childNodes[1].replaceChild(
                    a2,
                    c.parentNode.childNodes[1].firstChild
                );

                p2 = c.childNodes[0];
                p2.parentNode.removeChild(p2);
                p3 = c.childNodes[0];
                p3.parentNode.removeChild(p3);
                p4 = c.childNodes[0];
                p4.parentNode.removeChild(p4);
                var input2 = document.createElement("input");
                input2.type = "button";
                input2.value = "Save";
                c.appendChild(input2);
                input2.addEventListener("click", deleteRow, false);
            }

            function delRow() {
                var i = this.parentNode.parentNode.rowIndex;
                document.getElementById("tabl").deleteRow(i);
            }

            function deleteRow() {
                c = this.parentNode;
                c.removeChild(this);
                var hr = document.createElement("a");
                hr.href = "#";
                hr.innerHTML = "edit";
                c.appendChild(hr);
                hl = document.createElement("span");
                hl.innerHTML = "/";
                c.appendChild(hl);
                var hm = document.createElement("a");
                hm.href = "#";
                hm.innerHTML = "delete";
                c.appendChild(hm);
                var val_name = c.parentNode.firstChild.firstChild.value;
                var val_email = c.parentNode.childNodes[1].firstChild.value;
                p1 = document.createElement("p");
                p1.innerHTML = val_name;
                p2 = document.createElement("p");
                p2.innerHTML = val_email;

                c.parentNode.firstChild.replaceChild(
                    p1,
                    c.parentNode.firstChild.firstChild
                );

                c.parentNode.childNodes[1].replaceChild(
                    p2,
                    c.parentNode.childNodes[1].firstChild
                );

                hr.addEventListener("click", editrow, false);
                hm.addEventListener("click", delRow, false);
            }

            function add() {
                x = document.getElementById("tabl");
                var row = document.createElement("tr");
                var td1 = document.createElement("td");
                var input = document.createElement("input");
                input.type = "text";
                td1.appendChild(input);
                var td2 = document.createElement("td");
                var input1 = document.createElement("input");
                input1.type = "text";
                td2.appendChild(input1);
                var td3 = document.createElement("td");
                var input2 = document.createElement("input");
                input2.type = "button";
                input2.value = "Save";
                input2.addEventListener("click", deleteRow, false);
                td3.appendChild(input2);
                row.appendChild(td1);
                row.appendChild(td2);
                row.appendChild(td3);
                x.appendChild(row);
            }

        </script>
    </head>
    <body>
        <div id="container">
            <form action="#">
                <table border="1" id="tabl" width="500px">
                    <tr>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Action</td>
                    </tr>
                </table>
                <input type="button" value="Add a Row" onClick="add()" />
            </form>
        </div>
    </body>
</html>
