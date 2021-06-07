<html>
    <body>
        <h2>Enter 5 subject marks out of 20</h2>
        <form action="reg1process.php" method="POST">
            <table>
                <tr>
                    <td>
                        CN
                    </td>
                    <td>
                        <input type="number" name="cn" min="1" max="20">
                    </td>
                </tr>
                <tr>
                    <td>
                        JAVA
                    </td>
                    <td>
                        <input type="number" name="java" min="1" max="20">
                    </td>
                </tr>
                <tr>
                    <td>
                        PHP
                    </td>
                    <td>
                        <input type="number" name="phpsub" min="1" max="20">
                    </td>
                </tr>
                <tr>
                    <td>
                        C
                    </td>
                    <td>
                        <input type="number" name="c" min="1" max="20">
                    </td>
                </tr>
                <tr>
                    <td>
                        ML
                    </td>
                    <td>
                        <input type="number" name="ml" min="1" max="20">
                    </td>
                </tr>
                <tr>
                    
                    <td>
                        <input type="submit" name="submit" >
                        <input type="reset" name="reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>