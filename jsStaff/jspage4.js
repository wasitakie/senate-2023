$(".btnsub").submit(function () {
  if ($(".q21:checked").length == "") {
    alert("21.โดยรวมแล้วท่านทำนุบำรุงศิลปวัฒนธรรม/ ศาสนา/ การให้ทาน หรือไม่");
    $("#checkq21-1").focus();
    return false;
  }

  if ($(".q22:checked").length == "") {
    alert("22. โดยรวมแล้วท่านปฏิบัติกิจตามศาสนาเพื่อให้จิตใจสงบหรือไม่");
    $("#checkq22-1").focus();
    return false;
  }
  if ($(".q23:checked").length == "") {
    alert(
      "23. โดยรวมแล้วท่านยกโทษและให้อภัยอย่างจริงใจต่อผู้ที่สำนึกผิด หรือไม่"
    );
    $("#checkq23-1").focus();
    return false;
  }
  if ($(".q24:checked").length == "") {
    alert(
      "24. โดยรวมแล้วท่านยอมรับและขอโทษในความผิดที่ทำหรือมีส่วนรับผิดชอบ หรือไม่"
    );
    $("#checkq24-1").focus();
    return false;
  }
  if ($(".q25:checked").length == "") {
    alert("25. โดยรวมแล้ว ท่านตอบแทนผู้มีพระคุณ หรือช่วยเหลือท่าน หรือไม่");
    $("#checkq25-1").focus();
    return false;
  }

  if ($(".cv4:checked").length == "") {
    alert(
      "CV4.สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติจิตวิญญาณดของท่านเพียงใด"
    );
    $("#checkcv4-1").focus();
    return false;
  }

  var status = confirm("กรุณายืนยันการบันทึกข้อมูลอีกครั้ง");
  if (status == false) {
    return false;
  } else {
    return true;
  }
});
