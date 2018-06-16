<header><meta http-equiv="Content-Type" content="text/html; charset=ibm866">
<div class='container'>
    <div class="row">
        <div class="left-logo">
            <div class='logo'>
            <a href="{{asset('/')}}">
                <img src="{{asset('an/images/techb.png')}}" alt="electrical shop">
            </a>
            </div>
        </div>
        <div class="middle-nav">
            <nav>
                <ul>
                    
        
                <li class="dropdown-02" >
                    <a href="#" ><b>Products</b></a>

                <span class="submenu-icon">dd</span>                                                   
               <div class="submenu">
                   <div class="col-1">
                        

                        <ul class="clearfix">
                            <li class=" menu-id-5" data-menu-id=""><a  href="{{ route('product_maincategory', ['slug' => $product_categories[7]->slug]) }}">
                                    <i class="icon-rigid-pipe" ></i>
                                    Conduit and Accessories</a>  
                                    
                                    <span class="submenu-icon"></span><ul class="submenu-level2 clearfix">                                           
                            <li class="menu-id-26">
                                            <a href="{{ route('product.subcategory', [ $product_categories[7]->slug, $product_categories[7]->product_sub_category[0]->slug]) }}" >
                                                    <div class="pct-pic">
                                                        <img src="{{asset('product_cat/Solid_conduit.png')}}" alt="solid elbow" />
                                                    </div>
                                                    <div class="pct-name">
                                                        <div class="t-cell">Solid Conduit </div>
                                                    </div>
                                                </a>
                                                 <span class="submenu-icon"></span><ul class="submenu-level2 clearfix">                                        <li>

                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[0]->slug, $product_categories[7]->product_sub_category[0]->product_second_sub_category[0]->slug]) }}" >
                                       
                                        <div class="pct-pic">

                                    
                                            <img src="{{asset('product_cat/Solid_conduit.png')}}" alt="duct snake" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">Medium duty Grey </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[0]->slug,$product_categories[7]->product_sub_category[0]->product_second_sub_category[1]->slug]) }}" >
                                        <div class="pct-pic">
                                            <img src="{{asset('product_cat/medium_white.png')}}" alt="electrical conduit" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">Medium duty white </div>
                                        </div>
                                    </a>
                                </li>

                                                                                    <li>
                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[0]->slug, $product_categories[7]->product_sub_category[0]->product_second_sub_category[2]->slug]) }}" >
                                        <div class="pct-pic">
                                            <img src="{{asset('product_cat/heavy_orange.png')}}" alt="solid conduit" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">Heavy duty orange </div>
                                        </div>
                                    </a>
                                </li>

                                        

                                             </ul>      
                                     </li>

                                                                                        <li class="menu-id-24">
                                            <a href="{{ route('product.subcategory', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[1]->slug]) }}" >
                                                    <div class="pct-pic">
                                                        <img src="{{asset('product_cat/Flexible_conduit.png')}}" alt="flexi conduit" />
                                                    </div>
                                                    <div class="pct-name">
                                                        <div class="t-cell">Flexible Conduit</div>
                                                    </div>
                                                </a>
                                                              <span class="submenu-icon"></span><ul class="submenu-level2 clearfix">                                        <li>
                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[1]->slug,  $product_categories[7]->product_sub_category[1]->product_second_sub_category[0]->slug]) }}" >
                                        <div class="pct-pic">
                                            <img src="{{asset('product_cat/med_flex.png')}}" alt="duct snake 6 MM" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">Medium duty Grey </div>
                                        </div>
                                    </a>
                                </li>

                                                                                    <li>
                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[1]->slug, $product_categories[7]->product_sub_category[1]->product_second_sub_category[1]->slug]) }}" >
                                        <div class="pct-pic">
                                            <img src="{{asset('product_cat/hev_oran.png')}}" alt="inspection tee" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">Heavy duty orange </div>
                                        </div>
                                    </a>
                                </li>

                                                                                    <li>
                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[1]->slug, $product_categories[7]->product_sub_category[1]->product_second_sub_category[2]->slug]) }}" >
                                        <div class="pct-pic">
                                            <img src="{{asset('product_cat/med_flex.png')}}" alt="galvanised saddles 20MM" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">Heavy duty grey </div>
                                        </div>
                                    </a>
                                </li>

                                        

                                             </ul>                                           </li>

                                                                                        <li class="menu-id-33">
                                            <a href="{{ route('product.subcategory', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[2]->slug]) }}" >
                                                    <div class="pct-pic">
                                                        <img src="{{asset('product_cat/conduit_accessories.png')}}" alt="stainless steel saddles 20 MM" />
                                                    </div>
                                                    <div class="pct-name">
                                                        <div class="t-cell">Conduit accessories </div>
                                                    </div>
                                                </a>
                                                  <span class="submenu-icon"></span><ul class="submenu-level2 clearfix">                                        <li>
                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[2]->slug,  $product_categories[7]->product_sub_category[2]->product_second_sub_category[0]->slug]) }}" >
                                        <div class="pct-pic">
                                            <img src="{{asset('product_cat/saddles.png')}}" alt="stainless steel screws" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">Saddles</div>
                                        </div>
                                    </a>
                                </li>

                                                                                    <li>
                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[2]->slug, $product_categories[7]->product_sub_category[2]->product_second_sub_category[1]->slug]) }}" >
                                        <div class="pct-pic">
                                            <img src="{{asset('product_cat/Wall_Clamp.png')}}" alt="galvanised screws" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">Wall Clamps </div>
                                        </div>
                                    </a>
                                </li>

                                                                                    <li>
                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[2]->slug, $product_categories[7]->product_sub_category[2]->product_second_sub_category[2]->slug]) }}" >
                                        <div class="pct-pic">
                                            <img src="{{asset('product_cat/Couplings.png')}}" alt="sweep bends" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">Couplings </div>
                                        </div>
                                    </a>
                                </li>
                                

                                <li>
                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[2]->slug, $product_categories[7]->product_sub_category[2]->product_second_sub_category[3]->slug]) }}" >
                                        <div class="pct-pic">
                                            <img src="{{asset('product_cat/90Elbow.png')}}" alt="eye hooks" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">90ьз╕ Elbows </div>
                                        </div>
                                    </a>
                                </li>


                                <li>
                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[2]->slug, $product_categories[7]->product_sub_category[2]->product_second_sub_category[4]->slug]) }}" >
                                        <div class="pct-pic">
                                            <img src="{{asset('product_cat/Couplings.png')}}" alt="dust mask" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">Standard Bend </div>
                                        </div>
                                    </a>
                                </li>


                                <li>
                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[2]->slug, $product_categories[7]->product_sub_category[2]->product_second_sub_category[5]->slug]) }}" >
                                        <div class="pct-pic">
                                            <img src="{{asset('product_cat/Sweep_Bend.png')}}" alt="scotchlok connectors" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">Sweep Bends </div>
                                        </div>
                                    </a>
                                </li>


                                <li>
                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[2]->slug, $product_categories[7]->product_sub_category[2]->product_second_sub_category[6]->slug]) }}" >
                                        <div class="pct-pic">
                                            <img src="{{asset('product_cat/Couplings.png')}}" alt="4 way junction box 25 MM" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">Couplings </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[2]->slug,$product_categories[7]->product_sub_category[2]->product_second_sub_category[7]->slug]) }}" >
                                        <div class="pct-pic">
                                            <img src="{{asset('product_cat/Tee_Joins.png')}}" alt="25 MM inspection tee" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">Tee Joins </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[2]->slug, $product_categories[7]->product_sub_category[2]->product_second_sub_category[8]->slug]) }}" >
                                        <div class="pct-pic">
                                            <img src="{{asset('product_cat/Adaptors.png')}}" alt="20 MM plain to screw adaptors" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">Adaptors </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[2]->slug,$product_categories[7]->product_sub_category[2]->product_second_sub_category[9]->slug]) }}" >
                                        <div class="pct-pic">
                                            <img src="{{asset('product_cat/Reducers.png')}}" alt="reducers" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">Reducers </div>
                                        </div>
                                    </a>
                                </li>
                                        

                                             </ul>  
                                                                                                </li>
        

          <li class="menu-id-26">
                                            <a href="{{ route('product.subcategory', [$product_categories[7]->slug,$product_categories[7]->product_sub_category[3]->slug]) }}" >
                                                    <div class="pct-pic">
                                                        <img src="{{asset('product_cat/Enclosures.png')}}" alt="Enclosures" />
                                                    </div>
                                                    <div class="pct-name">
                                                        <div class="t-cell">Enclosures </div>
                                                    </div>
                                                </a>
                                                 <span class="submenu-icon"></span><ul class="submenu-level2 clearfix">                                        <li>
                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[3]->slug,  $product_categories[7]->product_sub_category[3]->product_second_sub_category[0]->slug]) }}" >
                                        <div class="pct-pic">
                                            <img src="{{asset('product_cat/20Junction_Box.png')}}" alt="20MM junction box" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">20MM Junction Box </div>
                                        </div>
                                    </a>
                                </li>

                                                                                    <li>
                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[3]->slug,'slug' => $product_categories[7]->product_sub_category[3]->product_second_sub_category[1]->slug]) }}" >
                                        <div class="pct-pic">
                                            <img src="{{asset('product_cat/25Junction_Box.png')}}" alt="25 MM junction box" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">25MM Junction Box </div>
                                        </div>
                                    </a>
                                </li>

                                                                                    <li>
                                    <a href="{{ route('product.category', [$product_categories[7]->slug, $product_categories[7]->product_sub_category[3]->slug, $product_categories[7]->product_sub_category[3]->product_second_sub_category[2]->slug]) }}" >
                                        <div class="pct-pic">
                                            <img src="{{asset('product_cat/32Junction_Box.png')}}" alt="32 MM junction box" />
                                        </div>
                                        <div class="pct-name">
                                            <div class="t-cell">32MM Junction Box </div>
                                        </div>
                                    </a>
                                </li>

                                        

                                             </ul>                      
                                     </li>
                                       </li>  </ul>   
                                           
                                       


                                
                                                                                <li class=" menu-id-10" data-menu-id="10"   ><a  href="{{ route('product_maincategory', ['slug' => $product_categories[6]->slug]) }}">
                                    <i class="icon-switch-and-socket" ></i>
                                    Switch Gears</a>  

                                    <span class="submenu-icon"></span><ul class="submenu-level2 clearfix">                                                <li class="menu-id-7">
                                            <a href="{{ route('product.subcategory', [$product_categories[6]->slug, $product_categories[6]->product_sub_category[0]->slug ]) }}" >
                                                    <div class="pct-pic">
                                                        <img src="{{asset('product_cat/Sockets.png')}}" alt="sockets" />
                                                    </div>
                                                    <div class="pct-name">
                                                        <div class="t-cell">Sockets </div>
                                                    </div>
                                                </a>
                                                                                                </li>

                                                                                        <li class="menu-id-34">
                                            <a href="{{ route('product.subcategory', [$product_categories[6]->slug,$product_categories[6]->product_sub_category[1]->slug ]) }}" >
                                                    <div class="pct-pic">
                                                        <img src="{{asset('product_cat/Switches.png')}}" alt="switches" />
                                                    </div>
                                                    <div class="pct-name">
                                                        <div class="t-cell">Switches </div>
                                                    </div>
                                                </a>
                                                                                                </li>

                                                                                        <li class="menu-id-35">
                                            <a href="{{ route('product.subcategory', [$product_categories[6]->slug, $product_categories[6]->product_sub_category[2]->slug ]) }}" >
                                                    <div class="pct-pic">
                                                        <img src="{{asset('product_cat/Switch_Gear_Accessories.png')}}" alt="switch gear accessories" />
                                                    </div>
                                                    <div class="pct-name">
                                                        <div class="t-cell">Switch Gear Accessories </div>
                                                    </div>
                                                </a>
                                                                                                </li>

                                                                                        <li class="menu-id-36">
                                            <a href="{{ route('product.subcategory', [$product_categories[6]->slug, $product_categories[6]->product_sub_category[3]->slug ]) }}" >
                                                    <div class="pct-pic">
                                                        <img src="{{asset('product_cat/Mechs.png')}}" alt="data mech rj45" />
                                                    </div>
                                                    <div class="pct-name">
                                                        <div class="t-cell">Mechs </div>
                                                    </div>
                                                </a>
                                                                                                </li>

                                                                                        
                                                                                       

                                                                                       

                                                                                    
                                         </ul>   
                                           
                                       


                                    </li> 
                                    <li class=" menu-id-10" data-menu-id="10"   ><a  href="{{ route('product_maincategory', ['slug' => $product_categories[5]->slug]) }}">
                                    <i class="icon-ceiling-fan" ></i>
                                    Cable Management</a>  

                                    <span class="submenu-icon"></span><ul class="submenu-level2 clearfix">                                                <li class="menu-id-284">
                                            <a href="{{ route('product.subcategory', [$product_categories[5]->slug, $product_categories[5]->product_sub_category[0]->slug ]) }}"  target="_blank" >
                                                    <div class="pct-pic">
                                                        <img src="{{asset('product_cat/Cable_Clips.png')}}" alt="c-clips" />
                                                    </div>
                                                    <div class="pct-name">
                                                        <div class="t-cell">Cable Clips </div>
                                                    </div>
                                                </a>
                                           

                                                                                       </li>

                                                                                        <li class="menu-id-285">
                                            <a href="{{ route('product.subcategory', [$product_categories[5]->slug, $product_categories[5]->product_sub_category[1]->slug]) }}"  target="_blank" >
                                                    <div class="pct-pic">
                                                        <img src="{{asset('product_cat/Cable_Tips.png')}}" alt="cable ties" />
                                                    </div>
                                                    <div class="pct-name">
                                                        <div class="t-cell">Cable Ties </div>
                                                    </div>
                                                </a>
                                                                                          </li>
                                                                                          <li class="menu-id-285">
                                            <a href="{{ route('product.subcategory', [$product_categories[5]->slug, $product_categories[5]->product_sub_category[2]->slug]) }}"  target="_blank" >
                                                    <div class="pct-pic">
                                                        <img src="{{$product_categories[5]->product_sub_category[2]->image}}" alt="cable ties" />
                                                    </div>
                                                    <div class="pct-name">
                                                        <div class="t-cell">{{$product_categories[5]->product_sub_category[2]->name}} </div>
                                                    </div>
                                                </a>
                                                                                          </li>

                                         </ul>   
                                           
                                       


                                    </li>
                                                                                <li class=" menu-id-12" data-menu-id="12"   ><a  href="{{ route('product_maincategory', ['slug' => $product_categories[4]->slug]) }}">
                                    <i class="icon-led-bulb" ></i>
                                    Lighting</a>  

                                    <span class="submenu-icon"></span><ul class="submenu-level2 clearfix">                                                <li class="menu-id-217">
                                            <a href="{{ route('product.subcategory', [$product_categories[4]->slug, $product_categories[4]->product_sub_category[0]->slug ]) }}" >
                                                    <div class="pct-pic">
                                                        <img src="{{asset('product_cat/comming.png')}}" alt="lighting" />
                                                    </div>
                                                    <div class="pct-name">
                                                        <div class="t-cell">Coming Soon </div>
                                                    </div>
                                                </a>
                                                                                                </li>

                                                                                       
                                                                                        

                                         </ul>   
                                           
                                       


                                    </li>
                                                                              <li class=" menu-id-10" data-menu-id="10"   ><a  href="{{ route('product_maincategory', ['slug' => $product_categories[3]->slug]) }}">
                                    <i class="icon-guard" ></i>
                                    Fixing</a> 

                                    <span class="submenu-icon"></span><ul class="submenu-level2 clearfix">                                                <li class="menu-id-270">
                                            <a href="{{ route('product.subcategory', [$product_categories[3]->slug, $product_categories[3]->product_sub_category[0]->slug ]) }}"  target="_blank" >
                                                    <div class="pct-pic">
                                                        <img src="{{asset('product_cat/Screws.png')}}" alt="screws" />
                                                    </div>
                                                    <div class="pct-name">
                                                        <div class="t-cell">Screws </div>
                                                    </div>
                                                </a>
                                                                                         </li>

                                                                                        <li class="menu-id-271">
                                            <a href="{{ route('product.subcategory', [$product_categories[3]->slug, $product_categories[3]->product_sub_category[1]->slug ]) }}"  target="_blank" >
                                                    <div class="pct-pic">
                                                        <img src="{{asset('product_cat/Wall_Plugs.png')}}" alt="wall plugs" />
                                                    </div>
                                                    <div class="pct-name">
                                                        <div class="t-cell">Wall Plugs </div>
                                                    </div>
                                                </a>
                                            



                                                                                             </li>

                                             <li class="menu-id-270">
                                            <a href="{{ route('product.subcategory', [$product_categories[2]->slug, $product_categories[3]->product_sub_category[2]->slug ]) }}"  target="_blank" >
                                                    <div class="pct-pic">
                                                        <img src="{{asset('product_cat/DrillBits.png')}}" alt="drill bit 5 MM" />
                                                    </div>
                                                    <div class="pct-name">
                                                        <div class="t-cell">Drill Bits </div>
                                                    </div>
                                                </a>
                                                                                         </li>
                                                  

                                         </ul>   
                                           
                                       


                                    </li>
                                                                                <li class=" menu-id-95" data-menu-id="95"   ><a  href="{{ route('product_maincategory', ['slug' => $product_categories[2]->slug]) }}">
                                    <i class="icon-industrial-and-residencial-cable" ></i>
                                    Automation</a>  

                                    <span class="submenu-icon"></span><ul class="submenu-level2 clearfix">                                                <li class="menu-id-188">
                                            <a href="{{ route('product.subcategory', [$product_categories[2]->slug, $product_categories[2]->product_sub_category[0]->slug ]) }}" >
                                                    <div class="pct-pic">
                                                        <img src="{{asset('product_cat/comming.png')}}" alt="Automation" />
                                                    </div>
                                                    <div class="pct-name">
                                                        <div class="t-cell">coming soon </div>
                                                    </div>
                                                </a>
                                                                                                </li>

                                                                                        
                                                                                        
                                                                                        

                                                                                        

                                         </ul>   
                                           
                                       


                                    </li>
                                                                                <li class=" menu-id-96" data-menu-id="96"   ><a  href="{{ route('product_maincategory', ['slug' => $product_categories[1]->slug]) }}">
                                    <i class="icon-impact" ></i>
                                    Tools</a>  

                                    <span class="submenu-icon"></span><ul class="submenu-level2 clearfix">                                                <li class="menu-id-193">
                                            <a href="{{ route('product.subcategory', [$product_categories[1]->slug, $product_categories[1]->product_sub_category[0]->slug ]) }}" >
                                                    <div class="pct-pic">
                                                        <img src="{{asset('product_cat/powertools.png')}}" alt="power tool" />
                                                    </div>
                                                    <div class="pct-name">
                                                        <div class="t-cell">Power Tool </div>
                                                    </div>
                                                </a>
                                                                                                </li>

                                                                                        

                                                                                      

                                                                                       

                                         </ul>   
                                           
                                       


                                    </li>
                                                                                <li class=" menu-id-97" data-menu-id="97"   ><a  href="{{ route('product_maincategory', ['slug' => $product_categories[0]->slug]) }}">
                                    <i class="icon-polycrystalline-solar" ></i>
                                    Others</a>  

                                    <span class="submenu-icon"></span><ul class="submenu-level2 clearfix">                                                <li class="menu-id-265">
                                            <a href="{{ route('product.subcategory', [$product_categories[0]->slug, $product_categories[0]->product_sub_category[0]->slug]) }}" >
                                                    <div class="pct-pic">
                                                        <img src="{{asset('product_cat/comming.png')}}" alt="others" />
                                                    </div>
                                                    <div class="pct-name">
                                                        <div class="t-cell">coming Soon </div>
                                                    </div>
                                                </a>
                                                                                                </li>

                                         </ul>   
                                           
                                       


                                    </li>
                                    </ul>
                        </div>
                   <div class="menu-pic">
                    

    </div>
                   </div>
                                                    </li>
                   
                       
                    <li class="dropdown-02"><a href="{{asset('about')}}"><b>About Us</b></a>
                        <span class="submenu-icon"></span>


        <div class="submenu">
            <div class="col-1">
                <ul class="clearfix">


       

        
        <li><a href="{{asset('about')}}" class="">
        <i class="icon-corporate"></i> Corporate Profile</a></li>

        <li><a href="{{asset('mission')}}" class="">
        <i class="icon-csr"></i> Mission</a></li>
        
        <li><a href="{{asset('careers')}}" class="">
        <i class="icon-news"></i> Careers</a></li>
    

       

      
       

       
    </ul>
            </div>
        </div>
</li>
<li class="dropdown-02"><a href="{{asset('contact')}}"><b>Contact us</b></a></li>

<li class="mob-only" > @if (Auth::guest())
                            <a href="{{ route('login') }}">Signup/Login</a>
                            
                        @else
                           <li>
                                <a href="{{asset('/home')}}"  aria-expanded="false">
                                    {{ Auth::user()->name }} 
                                </a>
                             </li>   

                                <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                            
                        @endif</li>
<li class="mob-only"><a href=""><span class="cart-count">{{Cart::content()->count()}}</span> cart</a></li>
                </ul>
                  <a href="#" id="pull" class="btn btn-warning btn-lg" style="background-color:#ddba6a; color:black; width:31%; right:0%;">Menu <i class="fa fa-bars"></i></a>
            </nav> 

        </div>
        <div class="right-nav">
            <div class="rht-heading clearfix">
                <ul class="nav-right">
                    
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Signup/Login</a></li>
                            
                        @else
                           <li>
                                <a href="{{asset('/home')}}"  aria-expanded="false">
                                    {{ Auth::user()->name }} 
                                </a>
                             </li>   

                                <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                            
                        @endif
                    </li>

                    <li><a href="{{asset('/cart')}}">Cart
                    <span class="badge">
                     {{Cart::content()->count()}}
                   </a></span></li>
                </ul>
                
            </div>    
        </div>    
   </div> 
</div>
</header>