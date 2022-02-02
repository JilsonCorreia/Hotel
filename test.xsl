<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html> 

<body style='background-color:#070707;align-content: center;'>
<br><br><br></br></br></br>
    <header style="background-color:#1e2c3b;
		padding:30px;
		margin:0px;
		border: solid black 2px;">
        <h1 style="text-align: center; color:white">✧ About Our Admins ✧</h1>
<style>
  table {
      border-collapse: collapse;
      width: 80%;
      margin-left: auto;
      margin-right: auto;
      color: black;    
  }
  
  th, td {
    text-align: left;
    padding: 28px;
    height: 10px;
    text-align:center;
    background-color: grey; 
  }
  
  tr:nth-child(even) {background-color: #1e2c3b;}
    .button {
        transition-duration: 0.4s;
        border:0px;
        height:35px;
        width:100px;
        background-color: #1e2c3b; 
        border-radius:8px;
        
    }

    .button:hover {
        background-color: black;
        color: white;
    }
</style>
    </header>
      <table border="0" >
    <tr bgcolor="#F2F3F4" padding="5px">
      <th style="text-align:center">Name</th>
      <th style="text-align:center">Age</th>
      <th style="text-align:center">Email</th>
      <th style="text-align:center">Phone No</th>
      <th style="text-align:center">Designation</th>
    </tr>
    <xsl:for-each select="admin/admininfo">
    <tr>
      <td style="background: white"><xsl:value-of select="name"/></td>
      <td style="background: white"><xsl:value-of select="age"/></td>
      <td style="background: white"><xsl:value-of select="email"/></td>
      <td style="background: white"><xsl:value-of select="phno"/></td>
      <td style="background: white"><xsl:value-of select="designation"/></td>
    </tr>
    </xsl:for-each>
  </table><br><br></br></br>
  <div style="padding-left: 45%">
      <a href="./index.php#about"><button type="button" class="button">Done</button></a>  
  </div>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
