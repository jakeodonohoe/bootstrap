<!--  Edited with XML Spy v4.2  -->
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
<xsl:template match="/">
<html>
<body>
<h2>Books</h2>
<table border="1">
<tr bgcolor="yellow">
<th align="left">id</th>
<th align="left">Name_of_Book</th>
</tr>
<xsl:for-each select="books/book">
<tr>
<td>
<xsl:value-of select="id"/>
</td>
<td>
<xsl:value-of select="Name_of_Book"/>
</td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>