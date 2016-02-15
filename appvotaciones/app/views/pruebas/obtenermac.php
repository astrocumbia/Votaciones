<!DOCTYPE  HTML  PUBLIC  "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
  <head>
      <title></title>
      <meta name="GENERATOR" content="Microsoft Visual Studio .NET 7.1">
      <meta name="vs_targetSchema" content="http://schemas.microsoft.com/intellisense/ie5">
      <script id="clientEventHandlersJS" language="javascript">
        function getmac() {
          var locator = new ActiveXObject("WbemScripting.SWbemLocator");
          var service = locator.ConnectServer(".");
          var properties = service.ExecQuery("SELECT * FROM Win32_NetworkAdapterConfiguration");
          var e = new Enumerator (properties);
          for (;!e.atEnd();e.moveNext ())
          {
            var p = e.item ();
              if(p.IPFilterSecurityEnabled==false){
                alert(p.MACAddress);
                return p.MACAddress;
              }
          }
        }
      </script>
  </head>
  <body>

        <INPUT id="Button1" type="button" value="Button" name="Button1" language="javascript" onclick="getmac()">
  </body>