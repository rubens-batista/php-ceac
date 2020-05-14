<form action="" method="post">
    <p>Name: <input type="text" name="name" size="20"  maxlength="40"></p>
    <p>Email: <input type="email" name="email" size="20" maxlength="40"></p>
    <p>
        Gender: <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
    </p>
    <p>
        Age: <select name="age">
            <option value="0-29">Under 30</option>
            <option value="30-60">Between 30 and 60</option>
            <option value="60+">Over 60</option>
        </select>
    </p>
    <p>Comments:<br><textarea name="comments" cols="40" rows="3"></textarea></p>
    <button type="submit">Submit</button>
</form>