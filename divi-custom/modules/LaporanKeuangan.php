<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class LaporanKeuangan extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Laporan Keuangan', 'axamandiri' );
        $this->slug = 'et_pb_laporan_keuangan';
        $this->whitelisted_fields = array(
            'title',
        );
        $this->fields_defaults = array(
            'title' => array( 'Title', 'add_default_setting' ),
        );
        $this->fullwidth  = true;
    }

    function get_fields () {
        $fields = array(
            'title' => array(
                'label' => __( 'Title', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start(); 
        global $wpdb;
        ?>
        <section aria-label="Kontak" id="kontak" class="bg-white3 sections clearfix relative o-hidden">
            <!-- <div class="transparent-separate absolute about-separate"><img src="<?php bloginfo('template_url'); ?>/images/separate-transparent.png" alt="AXA Mandiri"/></div> -->
            <!-- <a href="" class="button floating">Download Company Profile</a> -->
            <!-- <h3 class="small-title"></h3> -->
            <h4><?php echo $this->shortcode_atts['title'] ?></h4>


            <div class="large columns">
                    <div class="bg-greydark clearfix large-5 columns radius-all-5 cp-margin--bottom10">
                        <div class="box p-all-10">
                            <h5>Laporan Triwulan</h5>
                            <form id="laporan-tahunan" action="<?php echo get_permalink(3326) ?>" method="GET">
                                <?php
                                    $query = "SELECT YEAR(post_date) AS `year` FROM $wpdb->posts WHERE post_type = 'laporan_keuangan' GROUP BY YEAR(post_date) ORDER BY post_date DESC";
                                    $results = $wpdb->get_results($query);
                                    $currentYear = $results[0]->year;
                                    ?>

                                    <select id="laporan-tahun" class="required w-48p  columns" name="fyear">
                                        <option disabled selected value="">Pilih Tahun</option>
                                    <?php
                                    foreach($results as $result){
                                    $selected = ($_GET['fyear'] == $result->year) ? 'selected' : '';
                                    ?>
                                            <option value="<?php echo $result->year; ?>"><?php echo $result->year; ?></option>
                                    <?php
                                                }
                                    ?>
                                </select>

                                <select id='periode-keuangan' class='required right w-48p columns' name='fperiode'>
                                    <option disabled selected >Pilih Tipe periode</option>
                                    <option value="triwulan-i">Triwulan I</option>
                                    <option value="triwulan-ii">Triwulan II</option>
                                    <option value="triwulan-iii">Triwulan III</option>
                                    <option value="triwulan-iv">Triwulan IV</option>
                                    <option value="tahunan">Tahunan</option>

                                </select>
                                <!-- <select id="periode-keuangan" class="required w-48p right columns">
                                    <option disabled selected>Pilih Periode</option>

                                </select> -->

                                <div class="clearfix"></div>

                                <?php
                                    $args2 = array(
                                        'hide_empty'               => 0,
                                        'hierarchical'             => 1,
                                        'taxonomy'                 => 'jenis-laporan');
                                        $jenislaporan = get_categories($args2);

                                        $select = "<select id='laporan-keuangan' class='required w-48p columns' name='fjenis'>";
                                        $select.= "<option disabled selected>Jenis Laporan Keuangan</option>";

                                        foreach($jenislaporan as $jenis){
                                            if($jenis->count > 0){
                                                $select.= "<option value='".$jenis->slug."'>".$jenis->name."</option>";
                                            }
                                        }

                                        $select.= "</select>";

                                        echo $select;
                                ?>
                                <!-- <select id="jenis-keuangan" class="required w-48p columns">
                                    <option disabled selected>Jenis Laporan Keuangan</option>
                                </select> -->


                                <?php
                                    $args = array(
                                        'hide_empty'               => 0,
                                        'hierarchical'             => 1,
                                        'taxonomy'                 => 'laporan_entity');
                                  $categories = get_categories($args);

                                  $select = "<select id='laporan-entity' class='required right w-48p columns' name='fentity'>";
                                  $select.= "<option disabled selected>Pilih Tipe Asuransi</option>";

                                  foreach($categories as $category){
                                    if($category->count > 0){
                                        $select.= "<option value='".$category->slug."'>".$category->description."</option>";
                                    }
                                  }

                                  $select.= "</select>";

                                  echo $select;
                                ?>
                                <!-- <small class="form-requirements">* Semua field wajib diisi.</small> -->
                                <button type="submit" class="button right">Cari</button>
                            </form>
                        </div>
                    </div>
                    <div class="large-7 columns">
                    <!-- Laporan Kinerja Bulanan -->
                    <div class="large-6 columns">
                        <div class="bg-greydark clearfix   radius-all-5 box p-all-20">
                            <h5>Laporan Kinerja Bulanan</h5>
                            <form id="kinerja-bulanan" action="<?php echo site_url('kinerja-bulanan');?>">
                                <select id="kinerja-bulan" name='fmonth'>
                                    <option>Pilih Bulan </option>
                                    <option value="1"> Januari </option>
                                    <option value="2"> Februari </option>
                                    <option value="3"> Maret </option>
                                    <option value="4"> April </option>
                                    <option value="5"> Mei </option>
                                    <option value="6"> Juni </option>
                                    <option value="7"> Juli </option>
                                    <option value="8"> Agustus </option>
                                    <option value="9"> September </option>
                                    <option value="10"> Oktober </option>
                                    <option value="11"> November </option>
                                    <option value="12"> Desember </option>
                                </select>

                                <?php
                                    $query = "SELECT YEAR(post_date) AS `year` FROM $wpdb->posts WHERE post_type = 'laporan_bulanan' GROUP BY YEAR(post_date) ORDER BY post_date DESC";
                                    $results = $wpdb->get_results($query);
                                    $currentYear = $results[0]->year;
                                    ?>

                                    <select id="kinerja-tahun"  disabled="disabled" name="fyear">
                                        <option>Pilih Tahun</option>
                                    <?php
                                    foreach($results as $result){
                                    $selected = ($_GET['fyear'] == $result->year) ? 'selected' : '';
                                    ?>
                                            <option value="<?php echo get_post_type_archive_link( 'media' ).$result->year; ?>"><?php echo $result->year; ?></option>
                                    <?php
                                                }
                                    ?>
                                </select>

                                <button type="submit" class="button right">Cari</button>
                            </form>
                        </div>
                    </div>
                    <!-- end Laporan Kinerja Bulanan -->

                    <div class="large-6 columns">
                        <div class="bg-greydark clearfix radius-all-5 box p-all-20">
                            <h5>Laporan Tahunan</h5>
                            <form id="kinerja-bulanan" action="<?php echo site_url('laporan-kinerja-bulanan');?>">
                                <!-- <select id="kinerja-bulan">
                                    <option>Pilih Bulan </option>
                                    <option value="fmonth=1"> Januari </option>
                                    <option value="fmonth=2"> Februari </option>
                                    <option value="fmonth=3"> Maret </option>
                                    <option value="fmonth=4"> April </option>
                                    <option value="fmonth=5"> Mei </option>
                                    <option value="fmonth=6"> Juni </option>
                                    <option value="fmonth=7"> Juli </option>
                                    <option value="fmonth=8"> Agustus </option>
                                    <option value="fmonth=9"> September </option>
                                    <option value="fmonth=10"> Oktober </option>
                                    <option value="fmonth=11"> November </option>
                                    <option value="fmonth=12"> Desember </option>
                                </select> -->

                                <?php
                                    $query1 = "SELECT YEAR(post_date) AS `year` FROM $wpdb->posts WHERE post_type = 'kinerja_bulanan' GROUP BY YEAR(post_date) ORDER BY post_date DESC";
                                    $results1 = $wpdb->get_results($query1);
                                    $currentYear1 = $results1[0]->year;
                                    ?>

                                    <select id="kinerja-tahun" name="fyear">
                                        <option>Pilih Tahun</option>
                                    <?php
                                    foreach($results1 as $result1){
                                    $selected1 = ($_GET['fyear'] == $result1->year) ? 'selected' : '';
                                    ?>
                                            <option value="<?php echo $result1->year; ?>"><?php echo $result1->year; ?></option>
                                    <?php
                                                }
                                    ?>
                                    </select>

                                <?php
                                    $args1 = array(
                                        'hide_empty'               => 0,
                                        'hierarchical'             => 1,
                                        'taxonomy'                 => 'laporan_entity',

                                    );
                                  $categories1 = get_categories($args1);

                                  $select1 = "<select id='laporan-entity' name='fentity'>";
                                  $select1.= "<option  disabled selected>Pilih Tipe Asuransi</option>";

                                  foreach($categories1 as $category1){
                                    if($category1->count > 0){
                                        $select1.= "<option value='".$category1->slug."'>".$category1->description."</option>";
                                    }
                                  }

                                  $select1.= "</select>";

                                  echo $select1;
                                ?>
                                <button type="submit" class="button right">Cari</button>
                            </form>
                        </div>
                    </div>
                </div><!--end large 6-->
           <!-- <div class="large-4 columns branch">
                    <strong><?php /* _e("<!--:en-->Branch Office<!--:--><!--:id-->Kantor Cabang<!--:-->"); */
                                    _e("Kantor Cabang"); ?></strong>
                    <p><?php /* _e("<!--:en-->Find the nearest AXA Mandiri branch office in the your city<!--:--><!--:id-->Cari kantor cabang AXA terdekat di kota Anda<!--:-->"); */
                                _e("Cari kantor cabang AXA terdekat di kota Anda"); ?></p>
                <select id="kantor-cabang">
                    <option>Pilih Kota</option>
                </select>
                <button type="input" class="button red">Cari</button>
            </div>-->
        </section><!--end section contact us-->
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new LaporanKeuangan;