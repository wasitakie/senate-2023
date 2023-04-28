$(".btnsub").submit(function () {
  if ($(".q38:checked").length == "") {
    alert(
      "38. ท่านรู้สึกว่าการผ่อนชำระหนี้สินต่าง ๆ โดยรวมของท่านในปัจจุบันเป็นภาระ หรือไม่"
    );
    $("#checkq38-1").focus();
    return false;
  }

  if ($(".q39:checked").length == "") {
    alert("39. ท่านผ่อนชำระหนีตามกำหนดเวลาทุกครั้ง หรือไม่");
    $("#checkq39-1").focus();
    return false;
  }
  if ($(".q40:checked").length == "") {
    alert("39. โดยรวมแล้วท่านมีเงินเก็บออมในแต่ละเดือนหรือไม่ ");
    $("#checkq39-1").focus();
    return false;
  }

  if ($(".q41:checked").length == "") {
    alert("41. โดยรวมแล้วค่าตอบแทนที่ท่านได้รับทั้งหมดในแต่ละเดือนเป็นอย่างไร");
    $("#checkq41-1").focus();
    return false;
  }

  if ($(".cv8:checked").length == "") {
    alert(
      "CV8.สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติสุขภาพเงินดี"
    );
    $("#checkcv8-1").focus();
    return false;
  }

  var status = confirm("กรุณายืนยันการบันทึกข้อมูลอีกครั้ง");
  if (status == false) {
    return false;
  } else {
    return true;
  }
});
