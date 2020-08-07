<!DOCTYPE html>
<html lang="pt-pt">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   

      </head>
  <body>
    <h3>Send SMS</h3>

<pre>User does not have enough balance</pre>


<form method="GET" action="/gateway/f837fc4d4e89e2a416f0c9f7c300441ac6db19f9/api.v1/send">
  <table>
    <tr>
      <td>
        <label for="phone">Phone: </label>
      </td>
      <td>
        <input id="phone" name="phone" value="935177789" />
      </td>
    </tr>
    <tr>
      <td>
        <label for="sender">Sender: </label>
      </td>
      <td>
        <input id="sender" name="sender" value="925707121" />
      </td>
    </tr>
    <tr>
      <td>
        <label for="sender">When (i.e 2009-02-15 15:16:17): </label>
      </td>
      <td>
        <input id="when" name="when" value="2018-12-05" />
      </td>
    </tr>
    <tr>
      <td>
        <label for="message">Message: </label>
      </td>
      <td>
        <textarea rows="5" cols="20" id="message" name="message">test</textarea>
      </td>
    </tr>
    <tr>
      <td>
        <label for="unicode">Is unicode: </label>
      </td>
      <td>
        <input type="checkbox" id="unicode" name="unicode" />
      </td>
    </tr>
    <tr>
      <td>
        <label for="reports_url">Reports URL: </label>
      </td>
      <td>
        <input size="100" id="reports_url" name="reports_url" value="" />
      </td>
    </tr>
    <tr>
      <td>
        <label for="output">Output: </label>
      </td>
      <td>
        <input type="radio" id="outputHtml" name="output" value="html" checked>
        <label for="outputHtml">html</label>
        <br/>
        <input type="radio" id="outputJson" name="output" value="json">
        <label for="outputJson">json</label>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="submit" value="Send" />
      </td>
    </tr>
  </table>
</form>  </body>
</html>
