<section>
<div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label text-right">  </label>

                                <div class="form-group col-md-6">
                                <label class="form-control-label"  >Nome do Projeto</label>
                                     <input type="text" name="nome" class="form-control" data-target="nome" value="{{ $projeto->nome }}" readonly>                                    
                                </div>

                                <div class="form-group col-md-3">
                               
                                </div>

                                <label for="" class="col-sm-2 col-form-label text-right">  </label>
                                <div class="form-group col-md-6">
                                <label class="form-control-label"  >Nome do Proponente</label>
                                     <input type="text" name="responsavel" class="form-control" data-target="responsavel" value="{{ $projeto->responsavel }}" readonly>                                   
                                </div>

                                <div class="form-group col-md-3">
                                <label class="form-control-label"  >CNPJ/CPF</label>
                                @if($projeto->status == 'Captação em análise')
                                        <input type="text" class="form-control" data-target="cpf-or-cnpj" readonly>
                                    @else
                                        <input type="text" class="form-control" name="{{ ($projeto->cpf) ? 'cpf' : 'cnpj' }}" data-target="cpf-or-cnpj" value="{{ ($projeto->cpf) ? $projeto->cpf : $projeto->cnpj }}" readonly>
                                    @endif
                               
                                </div>

                                <label for="" class="col-sm-2 col-form-label text-right">  </label>
                                <div class="form-group col-md-3">
                                <label class="form-control-label"  >Nº do PRONAC</label>
                                     <input type="text" name="num_pronac" class="form-control"   value="{{ $projeto->num_pronac }}" readonly>                                   
                                </div>

                                <div class="form-group col-md-3">
                                <label class="form-control-label"  >Segmento</label>
                                    <input type="text" name="segmento" class="form-control" data-target="segmento" value="{{ $projeto->segmento }}" readonly>
                                </div>

                                <div class="form-group col-md-3">
                                <label class="form-control-label"  >Área</label>
                                    <input type="text" name="area" class="form-control" data-target="area" value="{{ $projeto->area }}" readonly>
                                </div>

                                <label for="" class="col-sm-2 col-form-label text-right">  </label>
                                <div class="form-group col-md-3">
                                <label class="form-control-label"  >Mecanismo </label>
                                     <input type="text" name="mecanismo" class="form-control" data-target="mecanismo" value="{{ $projeto->mecanismo }}" readonly>                                    
                                </div>

                                <div class="form-group col-md-3">
                                <label class="form-control-label"  >Enquadramento</label>
                                    <input type="text" name="enquadramento" class="form-control" data-target="enquadramento" value="{{ $projeto->enquadramento }}" readonly>
                                </div>

                                <div class="form-group col-md-3">
                                <label class="form-control-label"  >Município/UF</label>
                                    <input type="text" name="municipio" class="form-control" data-target="municipio" value="{{ $projeto->municipio }}" readonly>
                                </div>

                                <label for="" class="col-sm-2 col-form-label text-right">  </label>
                                <div class="form-group col-md-3">
                                <label class="form-control-label"  >Ano do projeto</label>
                                     <input type="text" name="ano_projeto" class="form-control" data-target="ano_projeto" value="{{ $projeto->ano_projeto }}" readonly>                                    
                                </div>

                                <div class="form-group col-md-3">
                                <label class="form-control-label"  >Data término</label>
                                    <input type="text" name="data_termino" class="form-control" data-target="data_termino" value="{{ $projeto->data_termino }}" readonly>
                                </div>

                                <div class="form-group col-md-3">
                                <label class="form-control-label"  >Data início</label>
                                <input type="text" name="data_inicio" class="form-control" data-target="data_inicio" value="{{ $projeto->data_inicio }}" readonly>
                                </div>


                                <label for="" class="col-sm-2 col-form-label text-right">  </label>
                                <div class="form-group col-md-3">
                                <label class="form-control-label"  >Valor da proposta </label>
                                     <input type="text" name="valor_proposta" class="form-control" data-target="valor_proposta" value="{{ $projeto->responsvalor_propostaavel }}" readonly>                                    
                                </div>

                                <div class="form-group col-md-3">
                                <label class="form-control-label"  >Valor aprovado</label>
                                    <input type="text" name="valor_aprovado" class="form-control" data-target="valor_aprovado" value="{{ $projeto->valor_aprovado }}" readonly>
                                </div>
                                <div class="form-group col-md-3">
                               
                                </div>

                                <label for="" class="col-sm-2 col-form-label text-right">  </label>
                                <div class="form-group col-md-3">
                                <label class="form-control-label"  >Valor solicitado </label>
                                     <input type="text" name="valor_solicitado" class="form-control" data-target="valor_solicitado" value="{{ $projeto->valor_solicitado }}" readonly>                                   
                                </div>

                                <div class="form-group col-md-3">
                                <label class="form-control-label"  >Outras fontes</label>
                                    <input type="text" name="outras_fontes" class="form-control" data-target="outras_fontes" value="{{ $projeto->outras_fontes }}" readonly>
                                </div>

                                <div class="form-group col-md-3">
                               
                                </div>

                                <label for="" class="col-sm-2 col-form-label text-right">  </label>
                                <div class="form-group col-md-3">
                                <label class="form-control-label"  >Valor captado </label>
                                     <input type="text" name="valor_captado" class="form-control" data-target="valor_captado" value="{{ $projeto->valor_captado }}" readonly>                                    
                                </div>

                                <div class="form-group col-md-3">
                                <label class="form-control-label"  >Valor projeto</label>
                                    <input type="text" name="valor_projeto" class="form-control" data-target="valor_projeto" value="{{ $projeto->valor_projeto }}" readonly>
                                </div>

                                <div class="form-group col-md-3">
                               
                                </div>

                                <label for="" class="col-sm-2 col-form-label text-right">  </label>
                                <div class="form-group col-md-9">
                                <label class="form-control-label"  >Resumo </label>
                                     <textarea  name="resumo" class="form-control" data-target="resumo" value="{{ $projeto->resumo }}" rows="3" resize="none" readonly> </textarea>                                  
                                </div>

                                <label for="" class="col-sm-2 col-form-label text-right">  </label>
                                <div class="form-group col-md-9">
                                <label class="form-control-label"  >Etapa </label>
                                     <textarea  name="etapa" class="form-control" data-target="etapa" value="{{ $projeto->etapa }}" rows="3" resize="none" readonly> </textarea>                                  
                                </div>

                                <label for="" class="col-sm-2 col-form-label text-right">  </label>
                                <div class="form-group col-md-9">
                                <label class="form-control-label"  >Objetivos </label>
                                     <textarea  name="objetivos" class="form-control" data-target="objetivos" value="{{ $projeto->objetivos }}" rows="3" resize="none" readonly> </textarea>                                  
                                </div>

                                <label for="" class="col-sm-2 col-form-label text-right">  </label>
                                <div class="form-group col-md-9">
                                <label class="form-control-label"  >Sinopse </label>
                                     <textarea  name="sinopse" class="form-control" data-target="sinopse" value="{{ $projeto->sinopse }}" rows="3" resize="none" readonly> </textarea>                                  
                                </div>

                                <label for="" class="col-sm-2 col-form-label text-right">  </label>
                                <div class="form-group col-md-9">
                                <label class="form-control-label"  >Justificativa </label>
                                     <textarea  name="justificativa" class="form-control" data-target="justificativa" value="{{ $projeto->justificativa }}" rows="3" resize="none" readonly> </textarea>                                  
                                </div>

                                <label for="" class="col-sm-2 col-form-label text-right">  </label>
                                <div class="form-group col-md-9">
                                <label class="form-control-label"  >Ficha Técnica </label>
                                     <textarea  name="ficha_tecnica" class="form-control" data-target="ficha_tecnica" value="{{ $projeto->ficha_tecnica }}" rows="3" resize="none" readonly> </textarea>                                  
                                </div>

                                <label for="" class="col-sm-2 col-form-label text-right">  </label>
                                <div class="form-group col-md-9">
                                <label class="form-control-label"  >Especificação Técnica </label>
                                     <textarea  name="especificacao_tecnica" class="form-control" data-target="especificacao_tecnica" value="{{ $projeto->especificacao_tecnica }}" rows="3" resize="none" readonly> </textarea>                                  
                                </div>

                                <label for="" class="col-sm-2 col-form-label text-right">  </label>
                                <div class="form-group col-md-9">
                                <label class="form-control-label"  >Impacto Ambiental </label>
                                     <textarea  name="impacto_ambiental" class="form-control" data-target="impacto_ambiental" value="{{ $projeto->impacto_ambiental }}" rows="3" resize="none" readonly> </textarea>                                  
                                </div>

                                <label for="" class="col-sm-2 col-form-label text-right">  </label>
                                <div class="form-group col-md-9">
                                <label class="form-control-label"  >Democratização </label>
                                     <textarea  name="democratizacao" class="form-control" data-target="democratizacao" value="{{ $projeto->democratizacao }}" rows="3" resize="none" readonly> </textarea>                                  
                                </div>

                                <label for="" class="col-sm-2 col-form-label text-right">  </label>
                                <div class="form-group col-md-9">
                                <label class="form-control-label"  >Acessibilidade </label>
                                <input type="text" name="acessibilidade" class="form-control" data-target="acessibilidade" value="{{ $projeto->acessibilidade }}" readonly>                                    
                                     <!-- <textarea  name="acessibilidade" class="form-control" data-target="acessibilidade" value="{{ $projeto->acessibilidade }}" rows="3" resize="none" readonly>{{ $projeto->acessibilidade }} </textarea>                                   -->
                                </div>


                                <div class="form-group col-md-3"></div>

                
                            </div>
</section>