<!DOCTYPE html>
<html>
<?php require('..\resources\partials\nav.php')?>
<h2>A view on the Job</h2>
<button type="button" class="align-center collapsible">The jobs</button>
<div class="content">
  <img class="jobs" src="images/yoursurprise.png" alt="Your Surprise";>
  <h4>YourSuprise maakt gepersonaliseerde cadeaus, altijd in beweging en wilt de klant altijd verassen met iets moois en nieuws.
    YourSurprise heeft haar bedrijf in Zierikzee en door middel van AI kunnen ze voorspellen hoeveel producten zo moeten inkopen.</h4>
  <h4 style="text-align: left;">De verschillende rollen: PHP developer, Javascript developer</h4>
  <h4 style="text-align: left;">Technieken die worden gebruikt: Typescript, Javascript, AI, PHP</h4>
  <img class="jobs" src="images/macaw.jpg" alt="Macaw";>
  <h4>Macaw houdt wel van wat uitdaging. Macaw wil graag een oplossing zoeken voor hun problemen met behulp van IT.
    Macaw is dan ook speciaal gericht op full-service digital partnering.</h4>
  <h4 style="text-align: left;">De verschillende rollen: Cloud Engineer, Data & Analytics Consultant, .NET Developer,
    Business Consultant DevOps</h4>
  <h4 style="text-align: left;">Technieken die worden gebruikt: Microsoft, Sitecore, Power-BI</h4>
  <img class="jobs" src="images/veracode.png" alt="Veracode";>
  <h4>Veracode is een software security bedrijf en werkt met vele andere bedrijven samen om hun security te verbeteren en om in het
    algemeen het risico te verlagen voor een eventuele security leak.</h4>
  <h4 style="text-align: left;">De verschillende rollen: Software engineer, Linux System Administrator, Automation engineer,
    ICT Security Consultant</h4>
  <h4 style="text-align: left;">Technieken die worden gebruikt: .NET, GitHub</h4>
  <img class="jobs" src="images/amazon.png" alt="Amazon";>
  <h4>Amazon is een enorm bekende/grote online webshop waar je van alles kunt kopen maar Amazon heeft ook web services(AWS) waar een
    groot deel van het internet gebruikt van maakt.</h4>
  <h4 style="text-align: left;">De verschillende rollen: Software Development engineer, Data engineer, Network engineer, Cloud Support
    engineer, Senior Technical Program Manager
    ICT Security Consultant</h4>
  <h4 style="text-align: left;">Technieken die worden gebruikt: Verisign, Javascript, Oracle Dyn</h4>
  <img class="jobs" src="images/microsoft.jpg" alt="Microsoft";>
  <h4>Microsoft ontwikkelt, verspreidt, licentieert en ondersteunt een grote hoeveelheid aan computergerelateerde producten en diensten.
    In de IT richt Microsoft zich eigenlijk op alles wat te maken heeft met en rondom computers.</h4>
  <h4 style="text-align: left;">Bij Microsoft heb je heel veel verschillende rollen, dit varieert van security tot codering</h4>
  <h4 style="text-align: left;">Qua technieken is dit hetzelfde, er worden veel technieken gebruikt zoals scripts en natuurlijk
Microsoft haar eigen technieken zoals Microsoft365</h4>
</div>
<button type="button" class="align-center collapsible">Resources</button>
<div class="content">
  <p><a href="https://www.yoursurprise.nl/contact">YourSurprise</a></p>
  <p><a href="https://www.macaw.nl/over-ons/">Macaw</a></p>
  <p><a href="https://www.veracode.com/about">Veracode</a></p>
  <p><a href="https://www.amazon.jobs/en/jobs.php">Amazon</a></p>
  <p><a href="https://www.microsoft.com/nl-nl">Microsoft</a></p>
</div>
<script>
    var coll = document.getElementsByClassName("collapsible");
      var i;

      for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var content = this.nextElementSibling;
          if (content.style.display === "block") {
            content.style.display = "none";
          } else {
            content.style.display = "block";
          }
        });
      }
</script>
</body>
</div>
</html>
