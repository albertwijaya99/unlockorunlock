<style>
    body {
      font-size: .875rem;
    }
    /*
     * Sidebar
     */ 
    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      z-index: 100; /* Behind the navbar */
      padding: 60px 0 0; /* Height of navbar */
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    .sidebar-sticky {
      position: relative;
      top: 0;
      height: calc(100vh - 48px);
      padding-top: .5rem;
      overflow-x: hidden;
      overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    }

    @supports ((position: -webkit-sticky) or (position: sticky)) {
      .sidebar-sticky {
        position: -webkit-sticky;
        position: sticky;
      }
    }

    .sidebar .nav-link {
      font-weight: 600;
      color: #333;
      font-size: 1.25rem;
    }

    .sidebar .nav-link.active {
      color: #007bff;
    }

    .sidebar-heading {
      font-size: .75rem;
      text-transform: uppercase;
    }

    /*
     * Content
     */

    #main {
      padding-top: 60px; /* Space for fixed navbar */
      padding: 16px;
      margin-left:250px;
      margin-top: 80px;
    }
</style>
