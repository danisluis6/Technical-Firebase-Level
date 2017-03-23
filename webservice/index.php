<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Push Notification Automation</title>
    </head>
<body>
    <form action="send_notification.php" method="post">
        <table>
            <tr>
                <td>Title : </td>
                <td>
                    <input type="text" name="title"/>
                </td>
            </tr>
            <tr>
                <td>Message : </td>
                <td>
                    <input type="text" name="message"/>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Submit"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>