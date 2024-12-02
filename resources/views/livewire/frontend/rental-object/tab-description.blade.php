<div class="grid_16o16">
    @foreach ($sections as $index => $section)
        <div class="widget-box-2 mb-20 bg-primary-new">
            <div class="boxtop">
                <span class="inner"></span>
            </div>
            <div class="boxcontent bg-primary-new">
                <div class="hd"></div>
                <div class="bd">
                    <h6>
                        Abschnitt {{ $index + 1 }}
                    </h6>
                    <fieldset class="formfield_13">
                        <legend>Text-Abschnitt {{ $index + 1 }}</legend>
                        <div class="grid_12o16">
                            <!-- ÜBERSCHRIFT -->
                            <dl class="d-flex align-items-start">
                                <dt style="width: 25%;">
                                    <strong>Überschrift</strong>
                                    <p class="text-muted mt-1">
                                        {{ $helpTexts['headline'][$section['headline']] ?? 'Beispiel: "Objektbeschreibung"' }}
                                    </p>
                                </dt>
                                <dd style="width: 75%;">
                                    <input type="text" maxlength="30"
                                           wire:model.lazy="sections.{{ $index }}.headline"
                                           class="form-control"
                                           placeholder="Überschrift eingeben">
                                    @error('sections.' . $index . '.headline')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </dd>
                            </dl>

                            <!-- STICHWORT-FELD UND GENERIERUNG -->
                            <dl class="d-flex align-items-start">
                                <dt style="width: 25%;">
                                    <strong>Stichwörter</strong>
                                    <p class="text-muted mt-1">
                                        Geben Sie Stichwörter ein, z. B. "Luxuswohnung, zentrale Lage"
                                    </p>
                                </dt>
                                <dd style="width: 75%;">
                                    <input type="text"
                                           wire:model.lazy="sections.{{ $index }}.keywords"
                                           class="form-control"
                                           placeholder="Stichwörter eingeben">
                                    <button type="button"
                                            wire:click="generateDescription({{ $index }})"
                                            class="btn btn-primary btn-sm mt-2">
                                        Beschreibung generieren
                                    </button>
                                </dd>
                            </dl>

                            <!-- BESCHREIBUNG -->
                            <dl class="d-flex align-items-start">
                                <dt style="width: 25%;">
                                    <strong>Beschreibung</strong>
                                    <p class="text-muted mt-1">
                                        {{ $helpTexts['description'][$section['headline']] ?? 'Beispielbeschreibung einfügen...' }}
                                    </p>
                                </dt>
                                <dd style="width: 75%;">
                                    <textarea rows="5"
                                              cols="20"
                                              wire:model.lazy="sections.{{ $index }}.description"
                                              class="form-control"
                                              placeholder="Beschreibung eingeben"></textarea>
                                    @error('sections.' . $index . '.description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </dd>
                            </dl>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="boxbottom">
                <span class="inner"></span>
            </div>
        </div>
    @endforeach

    <!-- Buttons für Abschnitt-Verwaltung -->
    <div class="button_wrap">
        <button type="button" wire:click="addSection" class="btn btn-outline-success btn-sm mt-3"
                {{ count($sections) >= $maxSections ? 'disabled' : '' }}>
            Weitere Abschnitte hinzufügen
        </button>
        <button type="button" wire:click="removeSection" class="btn btn-outline-danger btn-sm mt-3"
                {{ count($sections) <= 1 ? 'disabled' : '' }}>
            Abschnitt entfernen
        </button>
    </div>
</div>
