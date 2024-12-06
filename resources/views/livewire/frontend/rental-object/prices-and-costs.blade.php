<div class="widget-box-2 mb-20 bg-primary-yellow">
    <div class="hd"></div>
    <div class="bd">
        <h6>Preise & Kosten <a href="#" wire:click.prevent="changeCurrency" class="icon_01 no_margin comment">Währung ändern</a></h6>




<!-- Fallback for null -->
@if($transactionType === 'verkaufen')
    <!-- Verkauf Fields -->

    verkaufen!!!!!!!!!!!!!!!!


    <div class="row mt-4">
        <!-- Kaufpreis  -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="purchasePrice">
                    @autotranslate("Kaufpreis  €", app()->getLocale())
                    <i class="fa fa-info-circle" data-bs-toggle="tooltip" title="Enter the total purchase price for the property."></i>
                </label>
                <input type="number" wire:model.lazy="prices.purchasePrice" id="purchasePrice" class="form-control" maxlength="17">
                @error('prices.purchasePrice') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Additional Information -->
        <div class="col-md-4">
            <div class="form-group">
                <label>@autotranslate("Additional Information", app()->getLocale())</label>
                <select wire:model.lazy="prices.additionalInformation" class="form-control">
                    <option value="">@autotranslate("No Additional Information", app()->getLocale())</option>
                    <option value="onRequest">@autotranslate("On Request", app()->getLocale())</option>
                    <option value="negotiable">@autotranslate("Negotiable", app()->getLocale())</option>
                    <option value="minimumPrice">@autotranslate("Minimum Price", app()->getLocale())</option>
                </select>
                @error('prices.additionalInformation') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>


                <!-- Hausgeld  -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="maintenanceFee">Hausgeld</label>
                        <input type="text" wire:model.lazy="prices.maintenanceFee" id="maintenanceFee" class="form-control" maxlength="17">
                        @error('prices.maintenanceFee') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>


                <!-- Preis/m² -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="warmRent">Warm Rent (€)</label>
                        <input type="text" wire:model.lazy="prices.warmRent" id="warmRent" class="form-control" maxlength="17">
                        @error('prices.warmRent') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>


                <!-- Anzahl Stellplätze -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="warmRent">Warm Rent (€)</label>
                        <input type="text" wire:model.lazy="prices.warmRent" id="warmRent" class="form-control" maxlength="17">
                        @error('prices.warmRent') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>

                <!-- Preis pro Stellplatz -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="warmRent">Warm Rent (€)</label>
                        <input type="text" wire:model.lazy="prices.warmRent" id="warmRent" class="form-control" maxlength="17">
                        @error('prices.warmRent') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>



<!-- Abschreibung/Anlage -->
<h4 class="mt-4">Abschreibung/Anlage</h4>
<div class="form-group d-flex flex-column">
    <!-- Historic Preservation Depreciation -->
    <div class="form-check">
        <input class="form-check-input" type="checkbox" wire:model.lazy="prices.historicPreservation" id="historicPreservation">
        <label class="form-check-label" for="historicPreservation">
            Denkmalschutz-Afa
        </label>
    </div>

    <!-- Renovation Depreciation -->
    <div class="form-check">
        <input class="form-check-input" type="checkbox" wire:model.lazy="prices.renovationDepreciation" id="renovationDepreciation">
        <label class="form-check-label" for="renovationDepreciation">
            Sanierungs-Afa
        </label>
    </div>

    <!-- Capital Investment -->
    <div class="form-check">
        <input class="form-check-input" type="checkbox" wire:model.lazy="prices.capitalInvestment" id="capitalInvestment">
        <label class="form-check-label" for="capitalInvestment">
            Kapitalanlage
        </label>
    </div>
</div>






@endif

@if($transactionType === 'vermieten')
    <!-- Vermietung Fields -->

    vermieten!!!!!!!!!!!!!!!!





    <div class="row mt-4">
        <!-- Cold Rent -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="coldRent">
                    @autotranslate("Kalt Miete", app()->getLocale())
                    <i class="fa fa-info-circle" data-bs-toggle="tooltip" title="Enter the total purchase price for the property."></i>
                </label>
                <input type="number" wire:model.lazy="prices.coldRent" id="coldRent" class="form-control" maxlength="17">
                @error('prices.coldRent') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Additional Information -->
        <div class="col-md-4">
            <div class="form-group">
                <label>@autotranslate("Additional Information", app()->getLocale())</label>
                <select wire:model.lazy="prices.additionalInformation" class="form-control">
                    <option value="">@autotranslate("No Additional Information", app()->getLocale())</option>
                    <option value="onRequest">@autotranslate("On Request", app()->getLocale())</option>
                    <option value="negotiable">@autotranslate("Negotiable", app()->getLocale())</option>
                    <option value="minimumPrice">@autotranslate("Minimum Price", app()->getLocale())</option>
                </select>
                @error('prices.additionalInformation') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>




                <!-- Utilities -->
                <div class="col-md-6">
                <div class="form-group">
                    <label for="utilities">@autotranslate("Nebenkosten", app()->getLocale())</label>
                    <input type="text" wire:model.lazy="prices.utilities" id="utilities" class="form-control" maxlength="17">
                    @error('prices.utilities') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                </div>


                <div class="row mt-4">
                    <!-- Heating Costs -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="coldRent">
                                @autotranslate("Heating Costs", app()->getLocale())
                                <i class="fa fa-info-circle" data-bs-toggle="tooltip" title="Enter the total purchase price for the property."></i>
                            </label>
                            <input type="text" wire:model.lazy="prices.heatingCosts" id="heatingCosts" class="form-control" maxlength="17">
                            @error('prices.heatingCosts') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <!-- No Specification -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@autotranslate("No Specification", app()->getLocale())</label>
                            <select wire:model.lazy="prices.noSpecification" class="form-control">
                                <option value="">No Specification</option>
                                <option value="in Warmiete enhalten">in Warmmiete enhalten</option>
                                <option value="in Nebenkosten enthalten">in Nebenkosten enthalten</option>
                                <option value="extern abgerechnet">extern abgerechnet</option>
                                <option value="nicht in warmmiete entahlen">nichty in warmmiete enthalten</option>
                            </select>
                            @error('prices.noSpecification') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>




                <!-- Warm Rent -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="warmRent">Warm Rent (€)</label>
                        <input type="text" wire:model.lazy="prices.warmRent" id="warmRent" class="form-control" maxlength="17">
                        @error('prices.warmRent') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>


                <!-- Price per m² -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pricepersqm">Price per m² (€)</label>
                        <input type="text" wire:model.lazy="prices.pricepersqm" id="pricepersqm" class="form-control" maxlength="17">
                        @error('prices.pricepersqm') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>

                <!-- Number of Parking Spaces -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="numberParkingSpaces">Number of Parking Spaces</label>
                        <input type="text" wire:model.lazy="prices.numberParkingSpaces" id="numberParkingSpaces" class="form-control" maxlength="17">
                        @error('prices.numberParkingSpaces') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>



                <!-- Price per Parking Space -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="priceParkingSpace">Price per Parking Space</label>
                        <input type="text" wire:model.lazy="prices.priceParkingSpace" id="priceParkingSpace" class="form-control" maxlength="17">
                        @error('prices.priceParkingSpace') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>


                <!-- Deposit -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Deposit">Deposit</label>
                        <input type="text" wire:model.lazy="prices.Deposit" id="Deposit" class="form-control" maxlength="17">
                        @error('prices.Deposit') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>

@endif

@if($transactionType === 'renditeobjekt' || $transactionType === null)
    <!-- Renditeobjekt Fields -->

    <div class="row mt-4">
        <!-- Purchase Price -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="purchasePrice">
                    Purchase Price (€)
                    <i class="fa fa-info-circle" data-bs-toggle="tooltip" title="Enter the total purchase price for the property."></i>
                </label>
                <input type="text" wire:model.lazy="prices.purchasePrice" id="purchasePrice" class="form-control" maxlength="17">
                @error('prices.purchasePrice') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Additional Information -->
        <div class="col-md-4">
            <div class="form-group">
                <label>Additional Information</label>
                <select wire:model.lazy="prices.additionalInformation" class="form-control">
                    <option value="">No Additional Information</option>
                    <option value="onRequest">On Request</option>
                    <option value="negotiable">Negotiable</option>
                    <option value="minimumPrice">Minimum Price</option>
                </select>
                @error('prices.additionalInformation') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>

    <!-- Maintenance Fee -->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mt-3">
                <label for="maintenanceFee">Maintenance Fee (€)</label>
                <input type="text" wire:model.lazy="prices.maintenanceFee" id="maintenanceFee" class="form-control" maxlength="17">
                @error('prices.maintenanceFee') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Price per m² -->
        <div class="col-md-6">
            <div class="form-group mt-3">
                <label for="pricePerSquareMeter">Price per m² (€)</label>
                <input type="text" wire:model.lazy="prices.pricePerSquareMeter" id="pricePerSquareMeter" class="form-control" maxlength="17">
                @error('prices.pricePerSquareMeter') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>

    <!-- Number of Parking Spaces -->
    <div class="row">
        <div class="col-md-3">
            <div class="form-group mt-3">
                <label for="parkingSlots">Number of Parking Spaces</label>
                <input type="text" wire:model.lazy="prices.parkingSlots" id="parkingSlots" class="form-control" maxlength="4">
                @error('prices.parkingSlots') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Price per Parking Space -->
        <div class="col-md-6">
            <div class="form-group mt-3">
                <label for="parkingPrice">Price per Parking Space (€)</label>
                <input type="text" wire:model.lazy="prices.parkingPrice" id="parkingPrice" class="form-control" maxlength="17">
                @error('prices.parkingPrice') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>

    <!-- Multiple of Rent -->
    <div class="row">
        <div class="col-md-3">
            <div class="form-group mt-3">
                <label for="multipleOfRent">
                    Multiple of Rent
                    <i class="fa fa-info-circle" data-bs-toggle="tooltip" title="Specify the rent multiple, e.g., 20x annual rent."></i>
                </label>
                <input type="text" wire:model.lazy="prices.multipleOfRent" id="multipleOfRent" class="form-control" maxlength="17">
                @error('prices.multipleOfRent') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>

<!-- Depreciation/Investment -->
<h4 class="mt-4">Depreciation/Investment</h4>
<div class="form-group d-flex flex-column">
    <!-- Historic Preservation Depreciation -->
    <div class="form-check">
        <input class="form-check-input" type="checkbox" wire:model.lazy="prices.historicPreservation" id="historicPreservation">
        <label class="form-check-label" for="historicPreservation">
            Historic Preservation Depreciation
        </label>
    </div>

    <!-- Renovation Depreciation -->
    <div class="form-check">
        <input class="form-check-input" type="checkbox" wire:model.lazy="prices.renovationDepreciation" id="renovationDepreciation">
        <label class="form-check-label" for="renovationDepreciation">
            Renovation Depreciation
        </label>
    </div>

    <!-- Capital Investment -->
    <div class="form-check">
        <input class="form-check-input" type="checkbox" wire:model.lazy="prices.capitalInvestment" id="capitalInvestment">
        <label class="form-check-label" for="capitalInvestment">
            Capital Investment
        </label>
    </div>
</div>

@endif


    </div>


<style>
.widget-box-2.mb-20.bg-primary-yellow {
    background-color: floralwhite;
}
</style>


</div>
