@extends("layouts.master")

@section('content')
   <main class="main-body"> 
    <div class="jumbotron" style=" background-image: url({{asset('/img/jumbotron.jpg') }});">
     
    </div>
      
    <div class="container  text-white">
        
        <div class="current-series text-center p-3 d-none d-xl-block">
            <h2 class="m-0"><strong>ABOUT</strong></h2>
        </div>

        <div class="about">  
           
      <div class="mb-3"> Il progetto riguarda la realizzazione di una parte del sito web di una piattaforma dedicata ai fumetti DC, con particolare attenzione alla creazione di sezioni responsive e allineamento dei contenuti utilizzando Bootstrap 5.
    </div>     
            <h2>Nello specifico, sono state implementate diverse sezioni, tra cui:</h2>
            
            <ul>
                <li>
                  <strong>Visualizzazione delle Serie Attuali:</strong> Le serie attuali sono presentate in una griglia di immagini con una breve descrizione. È stato utilizzato un layout di tipo grid con Bootstrap, che si adatta automaticamente ai vari dispositivi.
                </li>
                <li>
                  <strong>Footer e Link del Sito:</strong> Il footer contiene una serie di link suddivisi in categorie come "DC COMICS", "DC", "SITES" e "SHOP", accompagnati da un'immagine di sfondo con il logo DC. Il layout è stato realizzato per garantire la responsività, con l'uso di colonne e griglia che si adattano ai dispositivi mobili.
                </li>
                <li>
                  <strong>Personalizzazione del Design:</strong> Sono stati usati stili CSS personalizzati per migliorare l'estetica, come il ridimensionamento delle immagini e la creazione di un effetto hover. Inoltre, è stata gestita la visualizzazione dell'immagine di sfondo, con il corretto caricamento delle risorse tramite il metodo <code>asset()</code> di Laravel.
                </li>
                <li>
                  Il progetto è stato sviluppato per essere mobile-first, garantendo che il sito fosse visibile e funzionale su vari dispositivi, da desktop a smartphone. Sono stati fatti aggiustamenti per migliorare l'allineamento e l'estetica del layout, cercando di rendere l'interfaccia utente semplice e intuitiva.
                </li>
              </ul>
              
            
            <h2>Obiettivi Raggiunti:</h2>
            
            <ul>
                <li>Creazione di una griglia di serie di fumetti responsive.</li>
                <li>Realizzazione di un footer strutturato con immagini e link.</li>
                <li>Personalizzazione della grafica e gestione dell'immagine di sfondo.</li>
                <li>Ottimizzazione del sito per schermi di diverse dimensioni.</li>
                <li>Il progetto è in continua evoluzione e saranno aggiunti ulteriori miglioramenti man mano che vengono identificati nuovi requisiti.</li>
              </ul>
              
    </div>
        
   
   




</main>
@endsection