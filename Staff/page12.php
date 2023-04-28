<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include '../title/title.php' ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../boot/css/mdb.min.css" />
    <link rel="stylesheet" href="../css/style.css">
    <script src="../boot/js/mdb.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#slider-range-max").slider({
                range: "max",
                min: 0,
                max: 10,
                value: 0,
                step: 0.1,
                slide: function(event, ui) {
                    $("#amount").val(ui.value);
                }
            });
            $("#amount").val($("#slider-range-max").slider("value"));
        });
        $(function() {
            $("#slider-range-max1").slider({
                range: "max",
                min: 0,
                max: 10,
                value: 0,
                step: 0.1,
                slide: function(event, ui) {
                    $("#amount1").val(ui.value);
                }
            });
            $("#amount1").val($("#slider-range-max1").slider("value"));
        });
    </script>
</head>

<body>
    <?php include '../banner/banner.php'; ?>
    <div class="container manu">
        <div class="col-md-12">
            <div class="headText">
                <h4>คำชี้แจงในการตอบแบบสำรวจ</h4>
                <p>ให้ใส่เครื่องหมาย <i class="fa-solid fa-check"></i> ในช่อง <i class="fa-regular fa-square"></i>
                    ทุกข้อที่ท่านเลือก </p>
            </div>

            <div class="headpage">
                <h4>Happy Mind / สุขภาพจิตดี </h4>
            </div>

            <form action="page12Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">73. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกหรือมีอาการเบื่อ ไม่สนใจ ไม่อยากทำอะไรเลย หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q73" type="radio" name="q73" id="checkq73-1" value="1">
                            <label class="form-check-label" for="checkq73-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q73" type="radio" name="q73" id="checkq73-2" value="2">
                            <label class="form-check-label" for="checkq73-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q73" type="radio" name="q73" id="checkq73-3" value="3">
                            <label class="form-check-label" for="checkq73-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q73" type="radio" name="q73" id="checkq73-4" value="4">
                            <label class="form-check-label" for="checkq73-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q73" type="radio" name="q73" id="checkq73-5" value="5">
                            <label class="form-check-label" for="checkq73-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 74. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกหรือมีอาการเบื่ออาหาร หรือ กินมากเกินไป หรือไม่
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q74" type="radio" name="q74" id="checkq74-1" value="1">
                            <label class="form-check-label" for="checkq74-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q74" type="radio" name="q74" id="checkq74-2" value="2">
                            <label class="form-check-label" for="checkq74-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q74" type="radio" name="q74" id="checkq74-3" value="3">
                            <label class="form-check-label" for="checkq74-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q74" type="radio" name="q74" id="checkq74-4" value="4">
                            <label class="form-check-label" for="checkq74-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q74" type="radio" name="q74" id="checkq74-5" value="5">
                            <label class="form-check-label" for="checkq74-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">75. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกหรือมีอาการเหนื่อยง่าย หรือ ไม่ค่อยมีแรง หรือไม่
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q75" type="radio" name="q75" id="checkq75-1" value="1">
                            <label class="form-check-label" for="checkq75-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q75" type="radio" name="q75" id="checkq75-2" value="2">
                            <label class="form-check-label" for="checkq75-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q75" type="radio" name="q75" id="checkq75-3" value="3">
                            <label class="form-check-label" for="checkq75-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q75" type="radio" name="q75" id="checkq75-4" value="4">
                            <label class="form-check-label" for="checkq75-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q75" type="radio" name="q75" id="checkq75-5" value="5">
                            <label class="form-check-label" for="checkq75-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">76. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกหรือมีอาการหลับยาก หรือ หลับ ๆ ตื่น ๆ หรือหลับมากไป หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q76" type="radio" name="q76" id="checkq76-1" value="1">
                            <label class="form-check-label" for="checkq76-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q76" type="radio" name="q76" id="checkq76-2" value="2">
                            <label class="form-check-label" for="checkq76-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q76" type="radio" name="q76" id="checkq76-3" value="3">
                            <label class="form-check-label" for="checkq76-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q76" type="radio" name="q76" id="checkq76-4" value="4">
                            <label class="form-check-label" for="checkq76-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q76" type="radio" name="q76" id="checkq76-5" value="5">
                            <label class="form-check-label" for="checkq76-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">77. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกหรือมีอาการไม่สบายใจ หรือ ท้อแท้ หรือ ซึมเศร้า หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q77" type="radio" name="q77" id="checkq77-1" value="1">
                            <label class="form-check-label" for="checkq77-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q77" type="radio" name="q77" id="checkq77-2" value="2">
                            <label class="form-check-label" for="checkq77-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q77" type="radio" name="q77" id="checkq77-3" value="3">
                            <label class="form-check-label" for="checkq77-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q77" type="radio" name="q77" id="checkq77-4" value="4">
                            <label class="form-check-label" for="checkq77-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q77" type="radio" name="q77" id="checkq77-5" value="5">
                            <label class="form-check-label" for="checkq77-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">78. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกหรือมีอาการสมาธิไม่ดี เวลาทำอะไร เช่น ดูทีวี ฟังเพลง เล่นเน็ต หรือทำงานที่ต้องใช้ความตั้งใจ หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q78" type="radio" name="q78" id="checkq78-1" value="1">
                            <label class="form-check-label" for="checkq78-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q78" type="radio" name="q78" id="checkq78-2" value="2">
                            <label class="form-check-label" for="checkq78-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q78" type="radio" name="q78" id="checkq78-3" value="3">
                            <label class="form-check-label" for="checkq78-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q78" type="radio" name="q78" id="checkq78-4" value="4">
                            <label class="form-check-label" for="checkq78-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q78" type="radio" name="q78" id="checkq78-5" value="5">
                            <label class="form-check-label" for="checkq78-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">79. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกไม่ดีกับตัวเอง คิดว่าตัวเองล้มเหลว ทำให้ตนเองหรือครอบครัวผิดหวัง หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q79" type="radio" name="q79" id="checkq79-1" value="1">
                            <label class="form-check-label" for="checkq79-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q79" type="radio" name="q79" id="checkq79-2" value="2">
                            <label class="form-check-label" for="checkq79-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q79" type="radio" name="q79" id="checkq79-3" value="3">
                            <label class="form-check-label" for="checkq79-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q79" type="radio" name="q79" id="checkq79-4" value="4">
                            <label class="form-check-label" for="checkq79-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q79" type="radio" name="q79" id="checkq79-5" value="5">
                            <label class="form-check-label" for="checkq79-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">80. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกว่าทำอะไรช้าลงจนคนอื่นสังเกตเห็นได้ หรือ กระสับกระส่าย ไม่สามารถอยู่นิ่งได้เหมือนที่เคยเป็น หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q80" type="radio" name="q80" id="checkq80-1" value="1">
                            <label class="form-check-label" for="checkq80-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q80" type="radio" name="q80" id="checkq80-2" value="2">
                            <label class="form-check-label" for="checkq80-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q80" type="radio" name="q80" id="checkq80-3" value="3">
                            <label class="form-check-label" for="checkq80-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q80" type="radio" name="q80" id="checkq80-4" value="4">
                            <label class="form-check-label" for="checkq80-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q80" type="radio" name="q80" id="checkq80-5" value="5">
                            <label class="form-check-label" for="checkq80-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">81. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกว่า ถ้าเราตายไปคงจะดี หรือเคยคิดฆ่าตัวตาย หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q81" type="radio" name="q81" id="checkq81-1" value="1">
                            <label class="form-check-label" for="checkq81-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q81" type="radio" name="q81" id="checkq81-2" value="2">
                            <label class="form-check-label" for="checkq81-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q81" type="radio" name="q81" id="checkq81-3" value="3">
                            <label class="form-check-label" for="checkq81-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q81" type="radio" name="q81" id="checkq81-4" value="4">
                            <label class="form-check-label" for="checkq81-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q81" type="radio" name="q81" id="checkq81-5" value="5">
                            <label class="form-check-label" for="checkq81-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">82. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านเคยทำร้ายตัวเอง หรือ เคยพยายามฆ่าตัวตาย หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q82" type="radio" name="q82" id="checkq82-1" value="1">
                            <label class="form-check-label" for="checkq82-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q82" type="radio" name="q82" id="checkq82-2" value="2">
                            <label class="form-check-label" for="checkq82-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q82" type="radio" name="q82" id="checkq82-3" value="3">
                            <label class="form-check-label" for="checkq82-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q82" type="radio" name="q82" id="checkq82-4" value="4">
                            <label class="form-check-label" for="checkq82-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q82" type="radio" name="q82" id="checkq82-5" value="5">
                            <label class="form-check-label" for="checkq82-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="customRange3" class="form-label"><span class="textQ">
                                83. ปัจจุบัน ความสุข ของท่านอยู่ในระดับใด ขอให้ท่านกากบาท X ลงบนเส้นด้านล่างโดยคะแนนจะเรียงจากน้อยไป
                                หามากเริ่มจาก 0 หมายถึง ไม่มีความสุขเลย ไปจนถึง 10 หมายถึง มีความสุขที่สุด
                            </span></label>
                        <p>
                            <label for="amount">ผลคะแนนที่ท่านเลือก:</label>
                            <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;" name="q83">
                        </p>
                        <div id="slider-range-max"></div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="customRange3" class="form-label"><span class="textQ">
                                84. ปัจจุบันสถานการณ์การแพร่ระบาดโควิด-19 (COVID-19) ส่งผลกระทบต่อชีวิตความเป็นอยู่ของท่านในระดับใด โปรด กากบาท X ลงบนเส้นด้านล่าง โดยคะแนนเริ่มจาก 0 หมายถึง ไม่ส่งผลกระทบต่อชีวิตความเป็นอยู่เลย ไปจนถึง 10 หมายถึง ส่งผลกระทบต่อชีวิตความเป็นอยู่มากที่สุด </span></label>
                        <p>
                            <label for="amount1">ผลคะแนนที่ท่านเลือก:</label>
                            <input type="text" id="amount1" readonly style="border:0; color:#f6931f; font-weight:bold;" name="q84">
                        </p>
                        <div id="slider-range-max1"></div>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </div>

            </form>



            <script src="../jsStaff/jspage12.js"></script>



        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>