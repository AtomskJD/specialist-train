<?php
	// header("Location: http://google.com");
	// header("Refresh: 1");
	// header("Refresh: 3; url=http://iichan.ru");
	// header("content-type: text/xml; charset: windows-1251");
	// header("Content-disposition: attachment; filename=\"my.txt\"");
	header("Cache-Control: no-store, must-revalidateS");
	echo "<h1>" .date("r"). "</h1>";
	
?>
<doc>
  <title>Simple Serna+XInclude Example</title>
  <sect>
    <title>Introduction</title>
    <para>Syntext Serna supports in-place editing of both entities and XIncluded files. Serna XInclude implementation supports both document-level and fragment-level inclusions. Visual borders (corners) can be disabled in the stylesheet where necessary.</para>
  </sect>
  <xi:include xmlns:xi="http://www.w3.org/2001/XInclude" href="xinclude-1.xml"/>
  <sect>
    <title>Fragment-Level Inclusions</title>
    <para>Fragment-level inclusions allow to directly use fragments from other documents. Currently &quot;XPointer shorthands&quot; (ID&apos;s) are supported for referring to particular points in the target documents. For example, the following subsection is taken from the document <em weight="normal">xinclude-2.xml</em>, from section with ID &quot;nested-sect&quot;.</para>
    <xi:include xmlns:xi="http://www.w3.org/2001/XInclude" href="xinclude-2.xml" xpointer="nested-sect"/>
  </sect>
  <sect>
    <title>Inclusions With Nested References</title>
    <para>Paragraph below is included from xinclude-4.xml:</para>
    <xi:include xmlns:xi="http://www.w3.org/2001/XInclude" href="xinclude-4.xml"/>
    <para>The following is the reference to the full <em weight="normal">xinclude-3.xml</em>, which in turn includes nested section from <em>xinclude-4.xml</em>. Note that we already included <em weight="normal">xinclude-4.xml</em>. Now when you will try to edit inner (nested) section in any place where its inclusion occur, all changes will be automatically and immediately propagated to all other references to such section. This behaviour applies to both document-level and fragment-level inclusions.</para>
    <xi:include xmlns:xi="http://www.w3.org/2001/XInclude" href="xinclude-3.xml"/>
  </sect>
</doc>
