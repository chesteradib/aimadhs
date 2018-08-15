
<div class="mb-1">
    <h2>{l s='Year of construction' mod='hs_customfields'}</h2>
    <fieldset class="form-group">
        <div class="col-lg-12 col-xl-4">
            <input id="yoc"
                    class="form-control"
                   name="year_of_construction"
                   type="text"
                   value="{if $year_of_construction != ''}{$year_of_construction}{/if}"

            >
        </div>
    </fieldset>
    <div class="clearfix"></div>
</div>