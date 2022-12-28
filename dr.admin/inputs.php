<?php
include "includes/header.php";
?>
<div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Basic Elements start -->
                <section class="basic-elements">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="content-header">Form Inputs</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title-wrap bar-success">
                                        <h4 class="card-title mb-0">Text Inputs</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="px-3">
                                        <form class="form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Basic Input</label>
                                                            <input type="text" class="form-control" id="basicInput">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="helpInputTop">Input text with
                                                                help</label>
                                                            <small
                                                                class="text-muted">eg.<i>someone@example.com</i></small>
                                                            <input type="text" class="form-control" id="helpInputTop">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="disabledInput">Disabled Input</label>
                                                            <input type="text" class="form-control" id="disabledInput"
                                                                disabled>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="disabledInput">Readonly Input</label>
                                                            <input type="text" class="form-control" id="readonlyInput"
                                                                readonly="readonly" value="You can't update me :P">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="disabledInput">Input with
                                                                Placeholder</label>
                                                            <input type="email" class="form-control"
                                                                id="placeholderInput" placeholder="Enter Email Address">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="disabledInput">Static Text</label>
                                                            <p class="form-control-static" id="staticInput">
                                                                email@pixinvent.com</p>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="roundText">Rounded Input</label>
                                                            <input type="text" id="roundText" class="form-control round"
                                                                placeholder="Rounded Input">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="squareText">Square Input</label>
                                                            <input type="text" id="squareText"
                                                                class="form-control square" placeholder="square Input">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="helperText">With Helper Text</label>
                                                            <input type="text" id="helperText" class="form-control"
                                                                placeholder="Name">
                                                            <p><small class="text-muted">Find helper text here
                                                                    for given textbox.</small></p>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Inputs end -->

                <!-- Basic Textarea start -->
                <section class="basic-textarea">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title-wrap bar-warning">
                                        <h4 class="card-title mb-0">Textarea</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card-block">
                                        <form class="form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <fieldset class="form-group">
                                                            <label for="basicTextarea">Basic Textarea</label>
                                                            <textarea class="form-control" id="basicTextarea"
                                                                rows="3"></textarea>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <fieldset class="form-group">
                                                            <label for="placeTextarea">Textarea with
                                                                Placeholder</label>
                                                            <textarea class="form-control" id="placeTextarea" rows="3"
                                                                placeholder="Textarea with placeholder"></textarea>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <fieldset class="form-group">
                                                            <label for="descTextarea">Textarea with
                                                                Description</label>
                                                            <textarea class="form-control" id="descTextarea" rows="3"
                                                                placeholder="Textarea with description"></textarea>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Textarea end -->

                <!-- Basic Select start -->
                <section class="basic-select">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title-wrap bar-info">
                                        <h4 class="card-title mb-0">Select</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card-block">
                                        <form class="form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <fieldset class="form-group">
                                                            <label for="basicSelect">Basic Select</label>
                                                            <select class="form-control" id="basicSelect">
                                                                <option>Select Option</option>
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                                <option>Option 4</option>
                                                                <option>Option 5</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <fieldset class="form-group">
                                                            <label for="customSelect">Custom select</label>
                                                            <select class="custom-select d-block w-100"
                                                                id="customSelect">
                                                                <option selected>Open this select menu</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <fieldset class="form-group">
                                                            <label for="countrySelect">Multiple select</label>
                                                            <select class="form-control" id="countrySelect"
                                                                multiple="multiple">
                                                                <option selected="selected">United States
                                                                </option>
                                                                <option>Canada</option>
                                                                <option selected="selected">United Kingdom
                                                                </option>
                                                                <option>Japan</option>
                                                                <option>Australia</option>
                                                                <option>Germany</option>
                                                                <option selected="selected">India</option>
                                                                <option>Italy</option>
                                                                <option>Sweden</option>
                                                                <option>France</option>
                                                                <option>New Zealand</option>
                                                                <option>Switzerland</option>
                                                                <option>Russia</option>
                                                                <option>England</option>
                                                                <option>Norway</option>
                                                                <option>Greece</option>
                                                                <option>Philippines</option>
                                                                <option>Ireland</option>
                                                                <option>China</option>
                                                                <option>South Korea</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Select end -->

                <!-- Basic File Browser start -->
                <section class="file-browser">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title-wrap bar-danger">
                                        <h4 class="card-title mb-0">File input</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card-block">
                                        <form class="form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <fieldset class="form-group">
                                                            <label for="basicInputFile">Simple File
                                                                Input</label>
                                                            <input type="file" class="form-control-file"
                                                                id="basicInputFile">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <label>With Browse button</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Upload</span>
                                                            </div>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input"
                                                                    id="inputGroupFile01">
                                                                <label class="custom-file-label"
                                                                    for="inputGroupFile01">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic File Browser end -->

                <!-- Control Sizing start -->
                <section class="control-sizing">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title-wrap bar-success">
                                        <h4 class="card-title mb-0">Control Sizing Options</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card-block">
                                        <form class="form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <p>XLarge Input class <code>.form-control-xl</code></p>
                                                        <fieldset class="form-group position-relative">
                                                            <input type="text" class="form-control form-control-xl"
                                                                id="xLarge" placeholder="XLarge Input">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <p>XLarge Input class <code>.form-control-xl</code> for
                                                            select</p>
                                                        <fieldset class="form-group position-relative">
                                                            <select class="form-control form-control-xl"
                                                                id="xLargeSelect">
                                                                <option selected>XLarge select options</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <p>Large Input class <code>.form-control-lg</code></p>
                                                        <fieldset class="form-group position-relative">
                                                            <input type="text" class="form-control form-control-lg"
                                                                id="Large" placeholder="Large Input">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <p>Large Input class <code>.form-control-lg</code> for
                                                            select</p>
                                                        <fieldset class="form-group position-relative">
                                                            <select class="form-control form-control-lg"
                                                                id="LargeSelect">
                                                                <option selected>Large select options</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <p>Default Input</p>
                                                        <fieldset class="form-group position-relative">
                                                            <input type="text" class="form-control" id="Default"
                                                                placeholder="Default Input">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <p>Default Select</p>
                                                        <fieldset class="form-group position-relative">
                                                            <select class="form-control" id="DefaultSelect">
                                                                <option selected>Default select options</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <p>Small Input class <code>.form-control-sm</code></p>
                                                        <fieldset class="form-group position-relative">
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="Small" placeholder="Small Input">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <p>Small Input class <code>.form-control-sm</code> for
                                                            select</p>
                                                        <fieldset class="form-group position-relative">
                                                            <select class="form-control form-control-sm"
                                                                id="SmallSelect">
                                                                <option selected>Small select options</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Control Sizing end -->

                <!-- Inputs Icons start -->
                <section class="inputs-icons">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title-wrap bar-primary">
                                        <h4 class="card-title mb-0">Input with Icons</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="px-3">
                                        <form class="form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <p>Icon Left class <code>.has-icon-left</code></p>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" class="form-control"
                                                                    name="form-control-with-icon">
                                                                <div class="form-control-position">
                                                                    <i class="ft-search info"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <p>Icon Left class <code>.has-icon-right</code></p>
                                                            <div class="position-relative has-icon-right">
                                                                <input type="text" class="form-control"
                                                                    name="form-control-with-icon">
                                                                <div class="form-control-position">
                                                                    <i class="ft-upload warning"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <p>Round input with Icon Left class
                                                                <code>.has-icon-left</code>
                                                            </p>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" class="form-control round"
                                                                    name="form-control-with-icon">
                                                                <div class="form-control-position">
                                                                    <i class="ft-user danger"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <p>Round input with Icon Right class
                                                                <code>.has-icon-right</code>
                                                            </p>
                                                            <div class="position-relative has-icon-right">
                                                                <input type="text" class="form-control round"
                                                                    name="form-control-with-icon">
                                                                <div class="form-control-position">
                                                                    <i class="ft-bell primary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <p>Square input with Icon Left class
                                                                <code>.has-icon-left</code> with
                                                                <code>.spinner</code> class
                                                            </p>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" class="form-control square"
                                                                    name="form-control-with-icon">
                                                                <div class="form-control-position">
                                                                    <i class="ft-loader spinner"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <p>Square input with Icon Right class
                                                                <code>.has-icon-right</code> with
                                                                <code>.spinner</code> class
                                                            </p>
                                                            <div class="position-relative has-icon-right">
                                                                <input type="text" class="form-control square"
                                                                    name="form-control-with-icon">
                                                                <div class="form-control-position">
                                                                    <i class="ft-refresh-cw spinner"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Inputs Icons end -->
            </div>
        </div>
    </div>
    <?php
include "includes/footer.php";
?>