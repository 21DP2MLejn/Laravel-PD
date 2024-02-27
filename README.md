# Laravel-PD

## Teorija

-Kas ir api?
    Api ir application programming interface, ta ir sistēma, kas ļauj dažādiem komponentiem savstarpēji sazināties

-Kā deklarēt mainīgo PHP valodā?
    $mainiga_nosaukums = vertiba;

-Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
    Laravel izmanto MVC (Model-view-controller) tas nodrošina labu struktūru, atdalot datus un lietotāja interakciju, tas nodrošina koda uzturēšanu, organizēšanu un uzlabošanu

-Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
    ORM (Object-Relational-Mapping) ir tehnoloģija, kas ļauj attēlot relāciju datubāzes datus kā objektus, to izmanto, lai vienkāršotu datu bāzes darbības

-Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:
    $lietotaji = Users::where('rating', '>', 4)->get()

