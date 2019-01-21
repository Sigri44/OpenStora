<? xml version = "1.0"?>
<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/"
                       xmlns:moz="http://www.mozilla.org/2006/browser/search/">
    <ShortName>OpenStora (en)</ShortName>
    <Description>OpenStora (en)</Description>
    <Image height="16" width="16" type="image/x-icon">http://www.openstora.com/favicon.ico</Image>
    <Url type="text/html" method="get"
         template="https://sigri44.github.io/OpenStora/wiki/index_Special:Search&amp;search={searchTerms}"/>
    <Url type="application/x-suggestions+json" method="get"
         template="https://sigri44.github.io/OpenStora/wiki/api.php?action=opensearch&amp;search={searchTerms}&amp;namespace=0"/>
    <moz:SearchForm>/wiki/index_Special:Search</moz:SearchForm>
</OpenSearchDescription>