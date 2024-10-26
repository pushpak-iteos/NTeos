<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NTeos Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />

    <!-- Poppings font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- Inter font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- Ubuntu font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <!-- css -->
    <link rel="stylesheet" href="portfolio.css" />
  </head>
  <body>
  <?php include './common/NavigationBar.php';?>

  <div class="rect" style="padding-top: 70px;">
      <img src="./assets/images/blogs/Rectangle 2599.svg"  alt="">
      <h2>Portfolio</h2>
      <p>
          Home 
          <img class="less-than-symbol" src="./assets/images/blogs/less-than-symbol 1.svg" alt="">
          <span>Portfolio</span>
      </p>
    </div>

    <div class="main" style="padding-top: 70px;">
      <div class="container-fluid">
        <!-- Page title -->
        <div class="title text-center mt-2">
          <div class="t-heading">
            <h1 class="fw-bold">Work Case Studies</h1>
          </div>
          <div class="t-desc">
            <p>
              Our clients inspire us to create wonderful projects. Here we
              display the latest cases we are proud of
            </p>
          </div>
        </div>

        <!-- page containt -->

        <div class="container rounded content mt-5 pt-4">
          <div class="row">
            <div class="image-wrapper rounded col-sm-4 col-md-4 col-lg-4 pb-4">
              <div class="image">
                <img
                  class="img-fluid"
                  src="./assets/images/portfolio/digital.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="c-desc col-sm-8 col-md-8 col-lg-8 mt-3 pb-4">
              <div class="c-heading">
                <h3><span>Digital Signature</span></h3>
              </div>
              <div class="c-data">
                <p>
                  NTeos implemented a secure digital signature solution that
                  streamlined document approval processes, enhancing compliance
                  and reducing turnaround time, ultimately improving operational
                  efficiency and fostering trust in digital transactions across
                  various business sectors.
                </p>
              </div>
              <div class="c-button">
                <a href="./ITeos/Portfolio/Digital_Signature.php">
                <button class="btn btn-outline-success" type="submit">
                  Read more
                </button>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="container rounded content mt-5 pt-4">
          <div class="row">
            <div class="image-wrapper rounded col-sm-4 col-md-4 col-lg-4 pb-4">
              <div class="image">
                <img
                  class="img-fluid"
                  src="./assets/images/portfolio/mail.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="c-desc col-sm-8 col-md-8 col-lg-8 mt-3 pb-4">
              <div class="c-heading">
                <h3><span>Mail-Based Approval Process for SAP</span></h3>
              </div>
              <div class="c-data">
                <p>
                  Our mail-based approval process for SAP transformed
                  traditional workflows by automating approvals, ensuring timely
                  responses, and enhancing accountability, resulting in improved
                  efficiency and reduced delays in critical business operations.
                </p>
              </div>
              <div class="c-button">
                <a href="./ITeos/Portfolio/Mail-Based_Approval.php">
                <button class="btn btn-outline-success" type="submit">
                  Read more
                </button>
                </a>
                
              </div>
            </div>
          </div>
        </div>

        <div class="container rounded content mt-5 pt-4">
          <div class="row">
            <div class="image-wrapper rounded col-sm-4 col-md-4 col-lg-4 pb-4">
              <div class="image">
                <img
                  class="img-fluid"
                  src="./assets/images/portfolio/master data managment.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="c-desc col-sm-8 col-md-8 col-lg-8 mt-3 pb-4">
              <div class="c-heading">
                <h3><span>Master Data Management </span></h3>
              </div>
              <div class="c-data">
                <p>
                  NTeos's Master Data Management framework optimized data
                  accuracy and visibility across systems, enabling better
                  decision-making and compliance while significantly reducing
                  procurement spend through streamlined processes and improved
                  vendor risk assessments.
                </p>
              </div>
              <div class="c-button">
              <a href="./ITeos/Portfolio/Master_Data_Management.php">
                <button class="btn btn-outline-success" type="submit">
                  Read more
                </button>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="container rounded content mt-5 pt-4">
          <div class="row">
            <div class="image-wrapper rounded col-sm-4 col-md-4 col-lg-4 pb-4">
              <div class="image">
                <img
                  class="img-fluid"
                  src="./assets/images/portfolio/p2p.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="c-desc col-sm-8 col-md-8 col-lg-8 mt-3 pb-4">
              <div class="c-heading">
                <h3><span>P2P (Supplier Portal Collaboration)</span></h3>
              </div>
              <div class="c-data">
                <p>
                  We developed a robust P2P solution with supplier portal
                  collaboration, enhancing transparency and communication
                  between suppliers and buyers, leading to improved compliance,
                  reduced costs, and optimized procurement processes across
                  the supply chain.
                </p>
              </div>
              <div class="c-button">
              <a href="./ITeos/Portfolio/P2P.php">
                <button class="btn btn-outline-success" type="submit">
                  Read more
                </button>
</a>
              </div>
            </div>
          </div>
        </div>

        <div class="container rounded content mt-5 pt-4">
          <div class="row">
            <div class="image-wrapper rounded col-sm-4 col-md-4 col-lg-4 pb-4">
              <div class="image">
                <img
                  class="img-fluid"
                  src="./assets/images/portfolio/warehouse.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="c-desc col-sm-8 col-md-8 col-lg-8 mt-3 pb-4">
              <div class="c-heading">
                <h3><span>Warehouse Management System</span></h3>
              </div>
              <div class="c-data">
                <p>
                  Our Warehouse Management System implementation maximized
                  operational efficiency by automating inventory tracking and
                  optimizing space utilization, resulting in faster order
                  fulfillment and significant reductions in labor costs
                  for our clients.
                </p>
              </div>
              <div class="c-button">
              <a href="./ITeos/Portfolio/Warehouse_Management_System.php">
                <button class="btn btn-outline-success" type="submit">
                  Read more
                </button>
</a>
              </div>
            </div>
          </div>
        </div>

        <div class="container rounded content mt-5 pt-4">
          <div class="row">
            <div class="image-wrapper rounded col-sm-4 col-md-4 col-lg-4 pb-4">
              <div class="image">
                <img
                  class="img-fluid"
                  src="./assets/images/portfolio/rpa.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="c-desc col-sm-8 col-md-8 col-lg-8 mt-3 pb-4">
              <div class="c-heading">
                <h3><span>RPA</span></h3>
              </div>
              <div class="c-data">
                <p>
                  NTeos integrated RFID technology to enhance inventory accuracy
                  and traceability within supply chains. This innovation
                  minimized discrepancies, improved operational efficiencies,
                  and ensured timely deliveries while reducing overhead
                  costs significantly.
                </p>
              </div>
              <div class="c-button">
              <a href="./ITeos/Portfolio/RPA.php">
                <button class="btn btn-outline-success" type="submit">
                  Read more
                </button>
</a>
              </div>
            </div>
          </div>
        </div>

        <div class="container rounded content mt-5 pt-4">
          <div class="row">
            <div class="image-wrapper rounded col-sm-4 col-md-4 col-lg-4 pb-4">
              <div class="image">
                <img
                  class="img-fluid"
                  src="./assets/images/portfolio/account payble.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="c-desc col-sm-8 col-md-8 col-lg-8 mt-3 pb-4">
              <div class="c-heading">
                <h3><span>Asset Management</span></h3>
              </div>
              <div class="c-data">
                <p>
                  Our asset management solutions provided real-time visibility
                  into asset utilization and lifecycle management, enabling
                  organizations to optimize resource allocation, reduce
                  operational costs, and enhance overall asset performance
                  across various sectors.
                </p>
              </div>
              <div class="c-button">
              <a href="./ITeos/Portfolio/Asset Management.php">
                <button class="btn btn-outline-success" type="submit">
                  Read more
                </button>
</a>
              </div>
            </div>
          </div>
        </div>

        <div class="container rounded content mt-5 pt-4">
          <div class="row">
            <div class="image-wrapper rounded col-sm-4 col-md-4 col-lg-4 pb-4">
              <div class="image">
                <img
                  class="img-fluid"
                  src="./assets/images/portfolio/fleet.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="c-desc col-sm-8 col-md-8 col-lg-8 mt-3 pb-4">
              <div class="c-heading">
                <h3><span>Fleet Management</span></h3>
              </div>
              <div class="c-data">
                <p>
                  NTeos's fleet management system streamlined operations by
                  providing real-time tracking and analytics, improving route
                  efficiency, reducing fuel consumption, and ensuring compliance
                  with regulations while enhancing the overall management of
                  transportation resources.
                </p>
              </div>
              <div class="c-button">
              <a href="./ITeos/Portfolio/Fleet_Management.php">
                <button class="btn btn-outline-success" type="submit">
                  Read more
                </button>
</a>
              </div>
            </div>
          </div>
        </div>

        <div class="container rounded content mt-5 pt-4">
          <div class="row">
            <div class="image-wrapper rounded col-sm-4 col-md-4 col-lg-4 pb-4">
              <div class="image">
                <img
                  class="img-fluid"
                  src="./assets/images/portfolio/account payble.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="c-desc col-sm-8 col-md-8 col-lg-8 mt-3 pb-4">
              <div class="c-heading">
                <h3><span>Accounts Payable</span></h3>
              </div>
              <div class="c-data">
                <p>
                  We transformed accounts payable processes through automation
                  and integration with ERP systems, resulting in improved
                  accuracy, faster invoice processing times, enhanced
                  compliance, and significant cost savings for our clients.
                </p>
              </div>
              <div class="c-button">
              <a href="./ITeos/Portfolio/Account_Payable.php">
                <button class="btn btn-outline-success" type="submit">
                  Read more
                </button>
</a>
              </div>
            </div>
          </div>
        </div>

        <div class="container rounded content mt-5 pt-4 mb-5">
          <div class="row">
            <div class="image-wrapper rounded col-sm-4 col-md-4 col-lg-4 pb-4">
              <div class="image">
                <img
                  class="img-fluid"
                  src="./assets/images/portfolio/school rpa.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="c-desc col-sm-8 col-md-8 col-lg-8 mt-3 pb-4">
              <div class="c-heading">
                <h3><span>School ERP</span></h3>
              </div>
              <div class="c-data">
                <p>
                  Our School ERP system integrate admissions, attendance,
                  grading, and payroll into a unified platform, streamlining
                  administrative tasks, enhancing academic tracking, and
                  providing real- time data for improved decision-making.
                </p>
              </div>
              <div class="c-button">
              <a href="./ITeos/Portfolio/Services(Shared_Services_and_Consulting).php">
                <button class="btn btn-outline-success" type="submit">
                  Read more
                </button>
</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include './common/footer.php';?>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
