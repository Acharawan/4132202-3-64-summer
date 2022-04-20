<form id="frm_add">
    <div>
        <label> Name : </lable>
        <input type="text" name="name" required>
    </div>
    <div>
        <label> Surname : </lable>
        <input type="text" name="sname">
    </div>
    <div>
        <label> Age : </lable>
        <input type="text" name="age">
    </div>
    <div>
        <label> Sex : </lable>
        <select name="sex">
            <option value="">กรุณาเลือก</option>
            <option value="">ชาย</option>
            <option value="">หญิง</option>
        </select>
    </div>
    <button type="submit">SAVE</button>
    <button type="submit">RESET</button>
</form>

<script>
    $("#frm_add").submit(function (e) {
        e.preventDefault();

        let data = $(this).serialize()
        //console.log(data);

        $.ajax({
            url:"./query/user_add.php",
            method: "POST",
            data: data,
            success: function(msg) {
                console.log(msg);
            }
        });
    });
</script>