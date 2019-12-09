<div class="grid flex">
<!-- LISTE LES SYMPT PAR PATHOLOGIES : select S.descr from symptome S join symptpatho SP on SP.idS = S.idS join patho P on P.idP = SP.idP where p.idp = $id -->
  <div id="filters">
    <form id="filters_patho" method="post">
    <fieldset id="fs_all">
      <legend>Filtrage des pathologies</legend>
      <fieldset id="fs_mer">
        <legend>Méridiens et Merveilleux Vaisseaux</legend>

        <div class="inputMer">
          <ul>

            <li><input type="radio" name="li1" id="f_P"/><label for="f_P">Poumon</label></li>

            <li><input type="radio" name="li1" id="f_GI"/><label for="f_GI">Gros Intestin</label></li>

            <li><input type="radio" name="li1" id="f_E"/><label for="f_E">Estomac</label></li>

            <li><input type="radio" name="li1" id="f_Rte"/><label for="f_Rte">Rate/Pancréas</label></li>

          </ul>
        </div>

        <div class="inputMer">
          <ul>

            <li><input type="radio" name="li1" id="f_C"/><label for="f_C">Cœur</label></li>

            <li><input type="radio" name="li1" id="f_IG"/><label for="f_IG">Intestin grêle</label></li>

            <li><input type="radio" name="li1" id="f_V"/><label for="f_V">Vessie</label></li>

            <li><input type="radio" name="li1" id="f_R"/><label for="f_R">Rein</label></li>

          </ul>
        </div>

        <div class="inputMer">
          <ul>

            <li><input type="radio" name="li1" id="f_MC"><label for="f_MC">Maître du cœur</label></li>

            <li><input type="radio" name="li1" id="f_TR"><label for="f_TR">Triple réchauffeur</label></li>

            <li><input type="radio" name="li1" id="f_VB"><label for="f_VB">Vésicule Biliaire</label></li>

            <li><input type="radio" name="li1" id="f_F"><label for="f_F">Foie</label></li>

          </ul>
        </div>

        <div class="inputMer">
          <ul>

            <li><input type="radio" name="li1" id="f_DM"/><label for="f_DM">Du Mai</label></li>

            <li><input type="radio" name="li1" id="f_RM"/><label for="f_RM">Ren Mai</label></li>

            <li><input type="radio" name="li1" id="f_ChM"/><label for="f_ChM">Chong Mai</label></li>

            <li><input type="radio" name="li1" id="f_DaiM"/><label for="f_DaiM">Dai Mai</label></li>

          </ul>
        </div>

        <div class="inputMer">
          <ul>

            <li><input type="radio" name="li1" id="f_+QM"/><label for="f_+QM">Yang Qiao Mai</label></li>

            <li><input type="radio" name="li1" id="f_-QM"/><label for="f_-QM">Yin Qiao Mai</label></li>

            <li><input type="radio" name="li1" id="f_+WM"/><label for="f_+WM">Yang Wei Mai</label></li>

            <li><input type="radio" name="li1" id="f_-WM"/><label for="f_-WM">Yin Wei Mai</label></li>

          </ul>
        </div>
        </fieldset>

        <fieldset id="fs_patho" class="inputPatho">

          <legend>Pathologies</legend>
          <div class="inputPatho">

            <input type="radio" name="li2" id="fp_me"/><label for="fp_me">Méridien externe</label>

            <input type="radio" name="li2" id="fp_mi"/><label for="fp_mi">Méridien interne</label>

            <input type="radio" name="li2" id="fp_tf"/><label for="fp_tf">Zang/Fu</label>

            <input type="radio" name="li2" id="fp_l"/><label for="fp_l">Voie Luo</label>

            <input type="radio" name="li2" id="fp_j"/><label for="fp_j">Jin Jing</label>

            <input type="radio" name="li2" id="fp_mv"/><label for="fp_mv">Merveilleux Vaisseaux</label>

          </div>
        </fieldset>
      </fieldset>
      <input type="button" value="RàZ" id="raz_radio_btn">
      <input type="submit" value="Rechercher" id="filter_search">
    </form>

  </div>
  <span id="result_from_filter">
  </span>

  {if !isset($smarty.session.username)}
    <p>Veuillez vous connecter pour accéder à la recherche de pathologie par mot-clé</p>
  {else}
    <p>Recherche patho par symptome mot-clé :</p>
    <form action="index.php?page=patho" method="post" name="formkeyword" id="formkeyword">
      <textarea name="keyword" id="keyword" onkeypress="press_key_enter(event, this)"></textarea>
      <input type="submit" value="Recherche" onclick="search_by_keyword()">
    </form>
  {/if}

  {if isset($pathoResults)}
    {foreach from=$pathoResults item=foo}
      <li>{$foo}</li>
    {/foreach}
  {else}
    <p>Aucun résultats.</p>
  {/if}

</div>
