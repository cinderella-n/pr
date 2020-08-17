$(function() {

    // เมื่อ submit form id myform1    
    $("#myform1").on("submit", function() {

        // เก็บชุดข้อมูลที่ต้องการส่งทั้งหมดไว้ในตัวแปร str
        var str = $("#myform3").serialize();
        $.post("getdata.php", str, function(data) { // ส่งข้อมูลแบบ post 
            console.log(data); // คืนค่า data จากข้อมูลที่แสดงในไฟล์ getdata.php
            $("#myform3")[0].reset(); // reset form
        });
        return false; // ปิดการใช้งานการ submit form แบบปกติ

    });

    // เมื่อ form ถูก reset ด้วยปุ่ม reset
    $("#myform3").on("reset", function() {
        // ค้นหา input ทั้งหมดใน form
        $(this).find(":input").each(function(i, k) {
            var typeObj = $(k)[0].type; // หาประเภทของ รnput
            if (typeObj == "text" || typeObj == "password") {
                $(k).removeAttr("value");
            }
            if (typeObj == "select-one") {
                $(k).find("option:selected").removeAttr("selected");
            }
            if (typeObj == "radio" || typeObj == "checkbox") {
                $(k).removeAttr("checked");
            }
            if (typeObj == "textarea") {
                $(k).text("");
            }
            //            console.log(typeObj);
        });
    });

});