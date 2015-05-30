<?php
class BreedSeeder extends Seeder {
    
    public function run() {

        // clear our database ------------------------------------------
        DB::table('breeds')->delete();

        // seed our breeds table -----------------------
        // we'll create three different breeds

        $breedSpitz = Breed::create(array(
            'id'           => 1,
            'name'         => 'Spitz Alemão',
            'source'       => 'Os Spitz Alemães são descendentes dos cães
da Idade da Pedra: <<Peat dogs >>(Torfhund) <<Canis familiaris palustris Rüthimeyer>>
e mais tarde o Lake Dweller’s (Pfahlbau) Spitz; são as raças de cães mais antigas da
Europa Central. Muitas outras raças foram criadas a partir delas. Nos países de
línguas não germânicas os “Wolfsspitz” são conhecidos como Keeshonds e os Spitz
Anão como Pomerânia.',
            'standard'     => 'Os Spitz cativam pela beleza de sua pelagem, feita para
ficar externamente ao abundante subpelo. Particularmente impressionante é o forte
tipo de juba ao redor do pescoço (“rufo”) e a espessa cauda atrevidamente portada
sobre o dorso. A cabeça de raposa com olhos alertas e as pequenas orelhas pontudas,
inseridas próximas uma da outra, dão ao Spitz sua característica única, uma aparência
atrevida.',
            'temperament'  => 'O Spitz Alemão está sempre
atento, esperto e é excepcionalmente devotado ao seu dono. É muito dócil e fácil de
ser treinado. Sua desconfiança com estranhos e sua ausência de instinto de caça
fazem dele um cão de guarda ideal para casas e fazendas. Ele não é nem tímido nem
agressivo. Indiferente às intempéries, robustez e longevidade são seus atributos mais
importantes.',
            'image'        => '/uploads/breeds/spitz-alemao.jpg',
            'url'          => 'spitz-alemao',
            'active'       => 1
        ));

        $breedMaltes = Breed::create(array(
            'id'           => 2,
            'name'         => 'Maltês',
            'source'       => 'Seu nome não significa que ele é originário da
ilha de Malta, porque o adjetivo “Maltês” vem da palavra semítica “màlat” que quer
dizer refúgio ou porto; esta raiz semítica se encontra em todo uma série de nomes de
lugares marítimos; por exemplo o nome da ilha Adriática ilha da Méleda, a cidade
Siciliana de Melita e também o da ilha de Malta. Os ancestrais deste pequeno cão
viviam nos portos e cidades marítimas Centrais do Mediterrâneo onde caçavam
camundongos e ratos que se encontravam em profusão nos armazéns dos portos e
nos porões dos navios. Na lista de cães existentes na época de Aristóteles (384- 322
A.C.) ele menciona uma pequena raça para o qual atribui o nome latino de “canes
malitenses”. Este cão era conhecido na Roma Antiga; companheiro favorito das
matronas, foi elogiado por Strabon, poeta latino do Primeiro Século A.D..
Representações do Maltês por numerosos pintores da Renascência mostram este
pequeno cão nos salões da época, ao lado das belas damas daquele tempo.',
            'standard'     => 'De tamanho pequeno, corpo alongado. Coberto por uma
pelagem branca muito longa. Muito elegante com um distinto e orgulhoso porte da
cabeça.',
            'temperament'  => 'Vivo, afetuoso, muito dócil e muito
inteligente.',
            'image'        => '/uploads/breeds/maltes.jpg',
            'url'          => 'maltes',
            'active'       => 1
        ));

        $breedShihTzu = Breed::create(array(
            'id'           => 3,
            'name'         => 'Shih Tzu',
            'source'       => 'As pessoas tendem a se confundir entre os
Apso e Shih Tzu, mas há uma série de diferenças muito distintas entre eles. As raízes
desta raça estão no Tibete, mas ela foi desenvolvida na China, onde cães como estes
viviam nos palácios imperiais. A China se tornou uma república em 1912, após o que
exemplares da raça encontraram seu caminho para o ocidente, embora a primeira
importação registrada para a Grã-Bretanha não ocorreu antes de 1931. Foi reconhecida
como uma raça distinta de outras raças orientais em 1934, sendo concedido um
registro separado pelo The Kennel Club em 1940, com certificados para campeonato
disponibilizados a partir de 1949. O visual do crisântemo para a cabeça do Shih Tzu
é o mais atraente, e isso é causado pelo crescimento do pelo para cima, na ponte
nasal.',
            'standard'     => 'Robusto, pelagem abundante, mas não excessiva, com
um distinto porte arrogante e com uma cabeça com aspecto de crisântemo.',
            'temperament'  => 'Inteligente, ativo e alerta. Carinhoso
e independente.',
            'image'        => '/uploads/breeds/shih-tzu.jpg',
            'url'          => 'shih-tzu',
            'active'       => 1,
        ));

        $this->command->info('Breeds created!');

    }
}