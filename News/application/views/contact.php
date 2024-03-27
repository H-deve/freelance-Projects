
            <h2>اتصل بنا</h2>
          
            <p>
             الهاتف <?= $result->phone;?>
            </p>
            <p> <?= $result->description;?></p>
            <form action="#" class="contact_form">
              <input class="form-control" type="text" placeholder="اسم المستخدم ">
              <input class="form-control" type="email" placeholder="البريد الالكتروني">
              <textarea class="form-control" cols="30" rows="10" placeholder="نص الرسالة"></textarea>
              <input type="submit" value="إرسال الرسالة">
            </form>
        